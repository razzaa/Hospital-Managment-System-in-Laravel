<?php

namespace App\Http\Controllers;
use App\PatientProfileModel;
use Illuminate\Http\Request;
use App\AdminInvoiceModel;
use App\AdminPaymentModel;
use App\Http\Requests\AdminInvoiceRequest;
use PDF;
use Auth;
use App\User;
class AdminInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pat_data=PatientProfileModel::all();
        $invoice=AdminInvoiceModel::all();
        if(Auth::user()->admin=="accountant"){
            return view('accountant.invoice',compact('pat_data','invoice'));
        }
        return view('admin.invoice',compact('pat_data','invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminInvoiceRequest $request)
    {
        AdminInvoiceModel::create([
            'patient_name' => $request['patient_name'],
            'doctor_charges' => $request['doctor_charges'],
            'miscellaneous' => $request['miscellaneous'],
            'ward_charges' => $request['ward_charges'],
            'bed_charges' => $request['bed_charges'],
            'others_charges' => $request['others_charges'],
            'email'=>$request['email'],
            'grand_total' => $request->doctor_charges+$request->miscellaneous+$request->ward_charges+$request->bed_charges+$request->others_charges,
        ]);

        // AdminInvoiceModel::create($request->all());
        return redirect()->back()->with("message","Invoice Created Successfully!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminInvoiceModel $admin_invoice_show)
    {
        $pat_data=PatientProfileModel::all();
        if(Auth::user()->admin=="accountant"){
            return view('accountant.edit_invoice',compact('admin_invoice_show','pat_data'));
        }
        return view('admin.edit_invoice',compact('admin_invoice_show','pat_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminInvoiceRequest $request, AdminInvoiceModel $admin_invoice_show)
    {
        $admin_invoice_show->update($request->all());
        if(strtoupper($admin_invoice_show->confirmation)=="PAID"){
            AdminPaymentModel::create([
                'patient_name' => $admin_invoice_show['patient_name'],
                'invoice' => "3-2-".$admin_invoice_show['id'],
                'amount' => $admin_invoice_show['grand_total'],
            ]);
        }
        return redirect()->route('admin_invoice_show.index')->with("message","Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminInvoiceModel $admin_invoice_show)
    {
        $admin_invoice_show->delete();
        return redirect()->back()->with("message","Invoice Remove Successfully!");
    }
    public function downloadPDF($id){
        $data=AdminInvoiceModel::find($id);
        $sub_total=$data->doctor_charges+$data->bed_charges+$data->ward_charges+$data->others_charges+$data->miscellaneous;
        $tax_calculate=$sub_total*17/100;
        $late_charges=0;
        $grand_total=$sub_total+$tax_calculate;
        if(strtotime($data->created_at) < strtotime('-30 days')) {
            $late_charges=$grand_total*1.5/100;
            $grand_total=$grand_total+$late_charges;
        }
        $time = strtotime($data->created_at);
        $due_date = date("Y-m-d", strtotime("+1 month", $time));
        // return view('admin.pdf',compact('data','sub_total','grand_total','late_charges','tax_calculate','due_date'));
        $pdf=PDF::loadView('admin/pdf',compact('data','sub_total','grand_total','late_charges','tax_calculate','due_date'));
        return $pdf->download('invoice.pdf');
    }
    
}

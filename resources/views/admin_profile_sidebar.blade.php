<div class="col-md-3">
            <div class="card">
                <div class="card-header">MENU</div>
                <a href="{{route('dashboard')}}" class="btn btn-primary btn-block">Dashboard</a>
                <a href="{{action('AdminController@index')}}" class="btn btn-primary btn-block">Edit User</a>
                <a href="{{route('AdminProfileUpdate')}}" class="btn btn-primary btn-block">Profile Settings</a>
                <!-- {{link_to_route('adminurl.index','Edit User',null,['class'=>'btn btn-primary btn-block'])}} -->
                <a href="{{route('changepassword')}}" class="btn btn-primary btn-block">Change Password</a>
                <a href="{{action('AdminHistoryController@index')}}" class="btn btn-primary btn-block">Register History</a>
                <!-- {{link_to_route('adminhistory.index','User History',null,['class'=>'btn btn-primary btn-block'])}} -->
                </div>
                </div>
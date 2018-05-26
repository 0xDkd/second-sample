@if(count($errors)>0)
    <div class="col s12 m4 l12">
        <div class="card-panel blue-grey">
            <ul>
                @foreach($errors->all() as $error)
                    <li >X {{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    </div>
    @endif

<div class="col s12 m8 offset-m2 l6 offset-l3">
    <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="{{ $user->gravatar('140') }}" alt=" {{ $user->name }} " class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                {{ $user->name }}
              </span>
            </div>
        </div>
    </div>
</div>
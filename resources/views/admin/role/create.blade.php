<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Créer un rôle</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="route('admin.index')">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{route('admin.roles')}}">
                        <div class="text-tiny">Roles</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Modifier le rôle</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            @if(Session::has('status'))
                <p class="alert alert-success">{{Session::get('status')}}</p>
            @endif
            <form class="form-new-product form-style-1" action="{{ route('admin.role.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <fieldset class="name">
                    <div class="body-title">Nom<span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Nom" name="name"
                        tabindex="0" value="{{ old('name') }}" aria-required="true" required="">
                </fieldset>
                @error('name')
                    <span class="alert alert-danger text-center">{{$message}}</span>
                @enderror
    

                <fieldset class="role">
                    <div class="body-title mb-10">Permissions <span class="tf-color-1">*</span>
                    </div>
                    @foreach($permissions as $permission)
                    <label for="{{$permission->name}}">{{$permission->name}}</label>
                    <input type="checkbox" name="permissions[]" id="{{$permission->name}}" value="{{$permission->id}}" >
                    @endforeach
                    
                </fieldset>
                @error('role') <span class="alert alert-danger text-center">{{$message}}</span>@enderror
                
                

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
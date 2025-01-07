@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Les informations de l'utilisateur</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{route('admin.users')}}">
                        <div class="text-tiny">Utilisateurs</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Nouvel utilisateur</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.user.store')}}" method="POST"
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
                <fieldset class="name">
                    <div class="body-title">Email <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Email" name="email"
                        tabindex="0" value="{{ old('email') }}" aria-required="true" required="">
                </fieldset>
                @error('email')
                    <span class="alert alert-danger text-center">{{$message}}</span>
                @enderror
                <fieldset class="phone">
                    <div class="body-title">Téléphone <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="number" placeholder="Phone" name="phone"
                        tabindex="0" value="{{ old('phone') }}" aria-required="true" required="">
                </fieldset>
                @error('phone')
                    <span class="alert alert-danger text-center">{{$message}}</span>
                @enderror
                <fieldset class="password">
                    <div class="body-title">Mot de passe <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Mot de passe" name="password"
                        tabindex="0" value="{{ old('password') }}" aria-required="true" required="">
                </fieldset>
                @error('password')
                    <span class="alert alert-danger text-center">{{$message}}</span>
                @enderror

                <fieldset class="roles">
                    <div class="body-title mb-10">Role <span class="tf-color-1">*</span>
                    </div>
                    <div class="">
                    @foreach($roles as $role)
                    <label for="{{$role->name}}">{{$role->name}}</label>
                    <input type="checkbox" name="roles[]" id="{{$role->name}}" value="{{$role->id}}">
                    @endforeach
                    </div>
                </fieldset>
                @error('role') <span class="">{{$message}}</span>@enderror
                

                <div class="bot">
                    <div></div>
                    <button class="" type="submit">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
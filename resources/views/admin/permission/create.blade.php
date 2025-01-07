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
                    <a href="{{route('admin.permissions')}}">
                        <div class="text-tiny">Permissions</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Créer la permission</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            @if(Session::has('status'))
                <p class="alert alert-success">{{Session::get('status')}}</p>
            @endif
            <form class="form-new-product form-style-1" action="{{ route('admin.permission.store')}}" method="POST"
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
                

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
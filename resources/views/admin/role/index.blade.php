<div class="">
    <div class="">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h2 class="text-4xl text-black font-bold">Utilisateurs</h2>
            <ul class="flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="">
                        <div class="text-tiny">Tableau de bord</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Roles</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search" method="GET" id="search">
                        @csrf 
                        @method('GET')
                        <fieldset class="name">
                            <input type="text" placeholder="Rechercher ici..." class="" >
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="tf-button style-1 w208" href="{{ route('admin.role.create') }}"><i
                        class="icon-plus"></i>Ajouter</a>
            </div>
            <div class="wg-table table-all-role">
                <table class="table table-striped table-bordered">
                    @if(Session::has('status'))
                        <p class="alert alert-success">{{Session::get('status')}}</p>
                    @endif
                    <thead>
                        <tr class="border">
                            <th class="border">Id</th>
                            <th class="border">Name</th>
                            <th class="border">Action</th>
                        </tr>
                    </thead>
                    <tbody class="role-container relative" data-page="1">
                        @foreach($roles as $role)
                        <tr class="role-line">
                            <td>{{ $role->id }}</td>
                            <td class="pname">
                                <div class="name">
                                    <a href="#" class="body-title-2">{{ $role->name }}</a>
                                </div>
                            </td>
            
                            <td>
                                <div class="list-icon-function">
                                    <a href="{{ route('admin.role.edit', $role ) }}">
                                        <div class="item edit">
                                            <i class="icon-edit-3">Edit</i>
                                        </div>
                                    </a>
                                    <!-- <a href="{{ route('admin.role.destroy', $role ) }}">Delete</a> -->
                                    <form action="{{ route('admin.role.destroy', $role ) }}" id="formDelete" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="item text-danger delete">
                                            <i class="icon-trash-2">Delete</i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                {{$roles->links()}}
            </div>
        </div>
    </div>
</div>
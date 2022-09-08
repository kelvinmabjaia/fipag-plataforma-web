<div class="main-content">
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white"><strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature!
            Click <strong><a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank"
                    class="text-white">here</a></strong>
            to see the PRO
            product!</span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div>
                                    </div>
                <div>
                                    </div>
                <div class="d-flex flex-column mx-3 mt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                                                    <a href="https://soft-ui-dashboard-pro-laravel-livewire.creative-tim.com/laravel-new-user" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                                            </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex mt-3 align-items-center justify-content-center">
                            <p class="text-secondary pt-2">Show&nbsp;&nbsp;</p>
                            <select wire:model="perPage" class="form-control" id="entries">
                                <option value="5">5</option>
                                <option selected="" value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                            <p class="text-secondary pt-2">&nbsp;&nbsp;entries</p>
                        </div>
                        <div class="mt-3 ">
                            <input wire:model="search" type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="table-responsive mx-3">
    <table class="table table-flush">
        <thead class="thead-light">
            <tr>
                <th style="padding: 0.75rem 0.5rem">
            <a wire:click="sortBy('id')" class="text-xs text-secondary text-uppercase">
            <span>ID</span>

            <span>
                                    <i class="fas fa-sort cursor-pointer" aria-hidden="true"></i>
                            </span>
        </a>
    </th>                        <th style="padding: 0.75rem 0.5rem">
            <span class="text-xs text-secondary text-uppercase">Photo</span>
    </th>                        <th style="padding: 0.75rem 0.5rem">
            <a wire:click="sortBy('first_name')" class="text-xs text-secondary text-uppercase">
            <span>Name</span>

            <span>
                                    <i class="fas fa-sort-up cursor-pointer" aria-hidden="true"></i>
                            </span>
        </a>
    </th>                        <th style="padding: 0.75rem 0.5rem">
            <a wire:click="sortBy('email')" class="text-xs text-secondary text-uppercase">
            <span>Email</span>

            <span>
                                    <i class="fas fa-sort cursor-pointer" aria-hidden="true"></i>
                            </span>
        </a>
    </th>                        <th style="padding: 0.75rem 0.5rem">
            <a wire:click="sortBy('role_id')" class="text-xs text-secondary text-uppercase">
            <span>Role</span>

            <span>
                                    <i class="fas fa-sort cursor-pointer" aria-hidden="true"></i>
                            </span>
        </a>
    </th>                        <th style="padding: 0.75rem 0.5rem">
            <a wire:click="sortBy('created_at')" class="text-xs text-secondary text-uppercase">
            <span>Creation Date</span>

            <span>
                                    <i class="fas fa-sort cursor-pointer" aria-hidden="true"></i>
                            </span>
        </a>
    </th>                                                    <th style="padding: 0.75rem 0.5rem">
            <span class="text-xs text-secondary text-uppercase">Action</span>
    </th>
            </tr>
        </thead>
        <tbody>
            <tr>
    <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">1</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"><img src="https://soft-ui-dashboard-pro-laravel-livewire.creative-tim.com/avatars/team-1.jpg" alt="picture" class="avatar avatar-xxl me-2"></span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Admin Admin</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">admin@softui.com</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Admin</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">2022-08-25 09:15:06</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"></span>
</td>
</tr><tr>
    <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">2</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"><img src="https://soft-ui-dashboard-pro-laravel-livewire.creative-tim.com/avatars/team-2.jpg" alt="picture" class="avatar avatar-xxl me-2"></span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Creator Creator</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">creator@softui.com</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Creator</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">2022-08-25 09:15:06</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"></span>
</td>
</tr>                                                    <tr>
    <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">3</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"><img src="https://soft-ui-dashboard-pro-laravel-livewire.creative-tim.com/avatars/team-3.jpg" alt="picture" class="avatar avatar-xxl me-2"></span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Member Member</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">member@softui.com</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">Member</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs">2022-08-25 09:15:06</span>
</td>                                <td class="text-xs font-weight-bold align-middle">
    <span class="my-2 text-xs"></span>
</td>
</tr>
        </tbody>
    </table>
</div>                <div id="datatable-bottom">
                    <div>
    </div>

                </div>
            </div>
        </div>
    </div>

</div>

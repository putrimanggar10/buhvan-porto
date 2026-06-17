<!-- BEGIN: Modal Content -->
<!-- BEGIN: Modal Content -->
<div id="modal-add" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">New Users</h2>
                <div class="dropdown sm:hidden">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                    </a>
                </div>
            </div>
            <!-- END: Modal Header -->

            <!-- BEGIN: Modal Form -->
            <form action="/dashboard/users" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- BEGIN: Modal Body -->
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <!-- Name Category Field -->
                    <div class="col-span-12">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name </label>
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ old('name') }}" placeholder="Enter Name">
                        @error('name')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-12">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input id="email" name="email" type="text" class="form-control"
                            value="{{ old('email') }}" placeholder="example@gmail.com">
                        @error('email')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-12">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input id="password" name="password" type="text" class="form-control"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <!-- END: Modal Body -->

                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal"
                        class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-20">Save</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
            <!-- END: Modal Form -->
        </div>
    </div>
</div>
<!-- END: Modal Content -->

<!-- END: Modal Content -->

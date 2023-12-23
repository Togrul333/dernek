<div class="card-body">
    <div class="table-responsive">
        <table class="table table-light table-light-success">
            <tbody>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.id')</td>
                    <td class="table-center">{{ $volunteer->id }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">name</td>
                    <td class="table-center">{{ $volunteer->name }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">email</td>
                    <td class="table-center">{{ $volunteer->email }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">phone</td>
                    <td class="table-center">{{ $volunteer->phone }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">country</td>
                    <td class="table-center">{{ $volunteer->country }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">city</td>
                    <td class="table-center">{{ $volunteer->city }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">meslek</td>
                    <td class="table-center">{{ $volunteer->role }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">message</td>
                    <td class="table-center">{{ $volunteer->message }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">
                        @lang('backend.labels.created_at')
                    </td>
                    <td class="table-center">{{ $volunteer->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">
                        @lang('backend.labels.updated_at')
                    </td>
                    <td class="table-center">{{ $volunteer->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

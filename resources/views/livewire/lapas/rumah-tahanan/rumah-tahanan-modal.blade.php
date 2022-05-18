<div>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">List Data Rumah Tahanan</h1>
        </div>
        @hasanyrole('admin-lapas|lapas')
        <div class="ms-auto pageheader-btn">
            <a type="button" class="btn btn-primary btn-icon text-white me-2" data-bs-toggle="modal" data-bs-target="#modalImportRumahTahanan">
                <i class="fe fe-plus"></i>
                Import Data Rumah Tahanan
            </a>
        </div>
        @include('shared.lapas.rumah-tahanan.rumah-tahanan')
        @endhasanyrole
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW OPEN -->
    <div class="row row-cards">
        <div class="col-lg-12 col-xl-12">
            <div class="input-group mb-5">
                <input type="text" class="form-control" wire:model='query' placeholder="">
                <div class="input-group-text btn btn-primary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom-0 p-4">
                    <h2 class="card-title">{{ $paginate_content }}</h2>
                </div>
                <div class="e-table px-5 pb-5">
                    <div class="table-responsive table-lg">
                        <table class="table border-top table-bordered mb-0">
                            <thead>
                                <tr class="center-align">
                                    <th>No</th>
                                    <th>Nama Rumah Tahanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($listRumahTahanan as $i=>$rumahTahanan)
                                    <tr>
                                        <td class="text-center">
                                            {{ ($listRumahTahanan->currentpage()-1) * $listRumahTahanan->perpage() + $i + 1 }}
                                        </td>
                                        <td class="text-nowrap align-middle">{{$rumahTahanan->name}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-5">
                {{ $listRumahTahanan->links("livewire::bootstrap") }}
            </div>
        </div><!-- COL-END -->
    </div>
</div>

@section('js')
<script>
</script>
@endsection

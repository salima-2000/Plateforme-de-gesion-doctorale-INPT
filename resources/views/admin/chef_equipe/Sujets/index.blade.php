@extends('layouts.admin')

@section('content')
<div class="content">

    <div class="card card-table">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Proposateur</th>
                            <th>Intitulé de Sujet</th>
                            <th>Date Proposition</th>
                            <th>Descriptif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Sujet quelconque</td>
                            <td>2011/04/25</td>
                            <td><button type="button" style="margin-left: 30px;" class="btn btn-xs btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                        <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                    </svg>
                                </button></td>
                            <td>
                                <a class="btn btn-xs btn-success btn-sm" href="" data-toggle="modal" data-target="#acceptCandidat">
                                    Accepter
                                </a>
                                <a class="btn btn-xs btn-danger btn-sm" href="" data-toggle="modal" data-target="#refuseCandidat">
                                    Refuser
                                </a>

                                <!-- <form action=" " method="POST" onsubmit=" " style="display: inline-block;">
                                    <input type="hidden" name="_method" value="Refuser">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger btn-sm" value="Refuser">
                                </form>
                             -->
                            </td>

                        </tr>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- Accept Modal -->
<div class="modal fade" id="acceptCandidat" tabindex="-1" role="dialog" aria-labelledby="acceptCandidatTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=" " id="acceptCandidatTitle">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Etes vous sur de vouloir accepter cette proposition de sujet?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-right" data-dismiss="modal">Consulter</button>
                <button type="button" class="btn btn-primary">Accepter</button>
            </div>
        </div>
    </div>
</div>
<!-- Refuse Modal -->
<div class="modal fade" id="refuseCandidat" tabindex="-1" role="dialog" aria-labelledby="refuseCandidatTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=" " id="refuseCandidatTitle">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Etes vous sur de vouloir supprimer cette proposition de sujet?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-right" data-dismiss="modal">Consulter</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            searching: true,
            ordering: false,


            dom: 'Bfrtip',
            buttons: [{
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }]

        });

    });
</script>

@endsection

@section('styles')

<style>
    .card {
        margin: 15px;
        padding: 5px;
    }

    .content .add {
        margin: auto;
        width: 200px;
        border-radius: 100px;

    }

    .btn-primary {
        background-color: #037CC2;
        border-color: #037CC2;
    }
</style>

@endsection
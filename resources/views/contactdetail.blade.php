@extends('include/admin')
@section('maincontent')
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Messages</h3><br/>

                    <table class="table table-striped table-dark table-hover table-sm">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-2">Sender</th>
                            <th class="col-sm-2">Subject</th>
                            <th class="col-sm-3">Message</th>
                            <th class="col-sm-3">Date</th>
                            <th class="col-sm-2">View</th>
                            <th class="col-sm-1"></th>

                        </tr>
                        </thead>

                        @foreach ($contact as $data)
                            <tr >
                                <td align="center">
                                    {{$data->name}}
                                </td>
                                <td>{{$data->subject}}</td>
                                <td>
                                    <span class="text-length">
                                        {{$data->message}}
                                  </span>
                                  </td>
                                <td align="center">{{$data->created_at}}</td>
                                <td align="center">
                                    <a href="/viewcontactdetail/{{$data->mid}}" type="button" class="btn btn-primary btn-sm"><span>View</span></a>

                                </td>

                                <td align="center">
                                    <span class="action"><a href="/deletecontact/{{$data->mid}}" > <i class="fa fa-trash-alt"></i></a></span>
                                </td>
                            </tr>
                        @endforeach


                    </table>


                </div></div></div></div>
    @endsection
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/javascript/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    @section('tablescript')
        <script type="text/javascript">
            $(document).ready(function()
            {
                $(".table").DataTable();
            });
        </script>
    @endsection
    </body>
    </html>


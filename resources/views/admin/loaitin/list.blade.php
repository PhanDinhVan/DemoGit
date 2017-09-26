 @extends('admin.layout.index')

 @section('content')

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại tin
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên loại tin</th>
                                <th>Tên không dấu</th>
                                <th>Thể loại</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaitin as $value)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->Ten}}</td>
                                    <td>{{$value->TenKhongDau}}</td>
                                    <td>{{$value->theloai->Ten}}</td>
                                    <td class="center">
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                        <a href="admin/loaitin/delete/{{$value->id}}"> Delete</a>
                                    </td>
                                    <td class="center">
                                        <i class="fa fa-pencil fa-fw"></i> 
                                        <a href="admin/loaitin/edit/{{$value->id}}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

 @endsection
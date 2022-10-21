@extends('layout.adminApp')

@section('titre')
    Utilisateurs
@endsection

@section('adminContent')
   
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <div class="main-content ">
            <div class="section__content">
                <div class="container-fluid ">
                    <h2 style="color: #211061" class="mb-4">Utilisateurs</h2>
                    <div class="row ">
                        <div class="col-lg-12 col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead style="background-color: #211061">
                                        <tr>
                                            <th>Id</th>
                                            <th>Date_inscription</th>
                                            <th>Pseudo</th>
                                            <th>E-mail</th>
                                            <th>Rôle</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>9</td>
                                            <td>2018-09-29 05:57</td>
                                            <td>Mobile</td>
                                            <td>iPhone X 64Gb</td>
                                            <td>User</td>
                                            <td>
                                                <button style="background-color: #211061" class="btn text-white">Message</button>
                                                <button class="btn btn-danger">Bannir</button>
                                                <button style="background-color: #211061" class="btn text-white">Rôle</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>2018-09-28 01:22</td>
                                            <td>Mobile</td>
                                            <td>Samsung S8 Black</td>
                                            <td>User</td>
                                            <td>
                                                <button style="background-color: #211061" class="btn text-white">Message</button>
                                                <button class="btn btn-danger">Bannir</button>
                                                <button style="background-color: #211061" class="btn text-white">Rôle</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>2018-09-27 02:12</td>
                                            <td>Game</td>
                                            <td>Game Console Controller</td>
                                            <td>Admin</td>
                                            <td>
                                                <button style="background-color: #211061" class="btn text-white">Message</button>
                                                <button class="btn btn-danger">Bannir</button>
                                                <button style="background-color: #211061" class="btn text-white">Rôle</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>2018-09-26 23:06</td>
                                            <td>Mobile</td>
                                            <td>iPhone X 256Gb Black</td>
                                            <td>Editeur</td>
                                            <td>
                                                <button style="background-color: #211061" class="btn text-white">Message</button>
                                                <button class="btn btn-danger">Bannir</button>
                                                <button style="background-color: #211061" class="btn text-white">Rôle</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    </div>

@endsection
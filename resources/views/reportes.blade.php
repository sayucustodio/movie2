@extends('admin')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">

            <div class="content-wrapper" style="background-color: white;">

                <!--<div class="row grid-margin">
                    <div class="col-12">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">




                                    <div class="statistics-item">
                                        <p>
                                            <i class="icon-sm fa fa-user mr-2"></i>
                                            Nuevos Clientes
                                        </p>
                                        <h2>54000</h2>
                                        <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                                    </div>

                                    <div class="statistics-item">
                                        <p>
                                            <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                            Nuevas Películas
                                        </p>
                                        <h2>3500</h2>
                                        <label class="badge badge-outline-success badge-pill">12% increase</label>
                                    </div>

                                    <div class="statistics-item">
                                        <p>
                                            <i class="icon-sm fas fa-chart-line mr-2"></i>
                                            Alquilados
                                        </p>
                                        <h2>9000</h2>
                                        <label class="badge badge-outline-success badge-pill">10% increase</label>
                                    </div>
                                    <div class="statistics-item">
                                        <p>
                                            <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                            Pendientes
                                        </p>
                                        <h2>7500</h2>
                                        <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
-->
                <!-- <div class="col-md-4 grid-margin stretch-card" style="color:black">
                    <div class="card">
                        <div class="card-body">
                            <div id="inline-datepicker-example" class="datepicker">
                                <div class="datepicker datepicker-inline">
                                    <div class="datepicker-months" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2023</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="month">Jan</span><span
                                                            class="month focused active">Feb</span><span
                                                            class="month">Mar</span><span class="month">Apr</span><span
                                                            class="month">May</span><span class="month">Jun</span><span
                                                            class="month">Jul</span><span class="month">Aug</span><span
                                                            class="month">Sep</span><span class="month">Oct</span><span
                                                            class="month">Nov</span><span class="month">Dec</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-years" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2020-2029</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="year old">2019</span><span
                                                            class="year">2020</span><span class="year">2021</span><span
                                                            class="year">2022</span><span
                                                            class="year active focused">2023</span><span
                                                            class="year">2024</span><span class="year">2025</span><span
                                                            class="year">2026</span><span class="year">2027</span><span
                                                            class="year">2028</span><span class="year">2029</span><span
                                                            class="year new">2030</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-decades" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2000-2090</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="decade old">1990</span><span
                                                            class="decade">2000</span><span
                                                            class="decade">2010</span><span
                                                            class="decade active focused">2020</span><span
                                                            class="decade">2030</span><span
                                                            class="decade">2040</span><span
                                                            class="decade">2050</span><span
                                                            class="decade">2060</span><span
                                                            class="decade">2070</span><span
                                                            class="decade">2080</span><span
                                                            class="decade">2090</span><span
                                                            class="decade new">2100</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-centuries" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2000-2900</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="century old">1900</span><span
                                                            class="century active focused">2000</span><span
                                                            class="century">2100</span><span
                                                            class="century">2200</span><span
                                                            class="century">2300</span><span
                                                            class="century">2400</span><span
                                                            class="century">2500</span><span
                                                            class="century">2600</span><span
                                                            class="century">2700</span><span
                                                            class="century">2800</span><span
                                                            class="century">2900</span><span
                                                            class="century new">3000</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-12 grid-margin">

                        <div class="card">
                            <div class="card-body">
                                <iframe title="dashboard_ Movie" width="100%" height="800"
                                    src="https://app.powerbi.com/view?r=eyJrIjoiNzdjZDc1ZmEtZjIzMy00ZjY4LThkN2UtZWE4NjI5MTE4ODI5IiwidCI6Ijk1N2ZlODNhLTdmM2MtNGQwMS04MjM1LTUwYzhlZTY5ZTBlYSIsImMiOjR9"
                                    frameborder="0" allowFullScreen="true"></iframe>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    </div>
</div>
@endsection
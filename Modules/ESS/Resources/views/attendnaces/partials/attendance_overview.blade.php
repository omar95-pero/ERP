<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Attendance Overview</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">From:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" placeholder="19 Feb 2020"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">To:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" placeholder="19 Feb 2020"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <div class="form-group">
                            <label class="form-label">Month:</label>
                            <select name="attendance" class="form-control custom-select select2"
                                data-placeholder="Select Month">
                                <option label="Select Month"></option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <div class="form-group">
                            <label class="form-label">Year:</label>
                            <select name="attendance" class="form-control custom-select select2"
                                data-placeholder="Select Year">
                                <option label="Select Year"></option>
                                <option value="1">2024</option>
                                <option value="2">2023</option>
                                <option value="3">2022</option>
                                <option value="4">2021</option>
                                <option value="5">2020</option>
                                <option value="6">2019</option>
                                <option value="7">2018</option>
                                <option value="8">2017</option>
                                <option value="9">2016</option>
                                <option value="10">2015</option>
                                <option value="11">2014</option>
                                <option value="12">2013</option>
                                <option value="13">2012</option>
                                <option value="14">2011</option>
                                <option value="15">2019</option>
                                <option value="16">2010</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-1">
                        <div class="form-group mt-5">
                            <a href="#" class="btn btn-primary btn-block">Search</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Clock-In</th>
                                <th class="border-bottom-0">Clock-Out</th>
                                <th class="border-bottom-0">Progress</th>
                                <th class="border-bottom-0">Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20-01-2021</td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>09:35 AM</td>
                                <td>06:55 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>09h :10 mins</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

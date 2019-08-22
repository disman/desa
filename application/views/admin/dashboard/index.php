<style type="text/css">
    .charts {
        width: 50%;
        margin: 5px auto;
    }
</style>

<div id="dashboard-con">
    <div class="col-md-12">
        <div class="charts">
            <canvas id="chartPenduduk"></canvas>
        </div>
        <div class="charts">
            <canvas id="chartKriminal"></canvas>
        </div>
        <div class="charts">
            <canvas id="chartPenghasilan"></canvas>
        </div>
    </div>



    <div class="row">
        <div class="col-md-6 dashboard-left-cell">
            <div class="admin-content-con">
                <header class="clearfix">
                    <h5 class="pull-left">Articles</h5>
                    <a href="#" class="btn btn-xs btn-primary pull-right" role="button">Create new article</a>
                </header>
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Replies</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>My first post of many to come...</td>
                            <td>20</td>
                            <td>2 days ago</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                <a href="#" class="btn btn-xs btn-danger" role="button">del</a>
                            </td>
                        </tr>
                        <tr>
                            <td>My first post of many to come...</td>
                            <td>20</td>
                            <td>2 days ago</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                <a href="#" class="btn btn-xs btn-danger" role="button">del</a>
                            </td>
                        </tr>
                        <tr>
                            <td>My first post of many to come...</td>
                            <td>20</td>
                            <td>2 days ago</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                <a href="#" class="btn btn-xs btn-danger" role="button">del</a>
                            </td>
                        </tr>
                        <tr>
                            <td>My first post of many to come...</td>
                            <td>20</td>
                            <td>2 days ago</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                <a href="#" class="btn btn-xs btn-danger" role="button">del</a>
                            </td>
                        </tr>
                        <tr>
                            <td>My first post of many to come...</td>
                            <td>20</td>
                            <td>2 days ago</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                <a href="#" class="btn btn-xs btn-danger" role="button">del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="clearfix">
                    <a href="#" class="pull-right text-link">view all article</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 dashboard-right-cell">
            <div class="admin-content-con">
                <header>
                    <h5>Comments</h5>
                </header>
                <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Kang</div>
                    <div class="days-dash pull-right">2 days ago</div>
                </div>
                <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <small class="comment-date-dash">Today 23:50pm 23/03/2018</small>
                <hr>

                <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Disman</div>
                    <div class="days-dash pull-right">3 days ago</div>
                </div>
                <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <small class="comment-date-dash">Today 00:50pm 21/03/2018</small>
                <hr>
                <div class="clearfix">
                    <a href="#" class="pull-right text-link">view all comments</a>
                </div>
            </div>
        </div>
    </div>
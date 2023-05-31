@extends('layouts.staff.main')
@section('title', 'Issues')

@section('content')
        <div class="panel-header panel-header-sm"></div>
        <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h5 class="title">Issue #id</h5>
                    <button class="btn btn-info mt-0">
                      <i class="fa-solid fa-check pr-1"></i> Mark as Resolved
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>Topic</label>
                          <p class="form-control rounded-0">Payment Error</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Issue Description</label>
                          <p class="form-control rounded-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque repellendus magni nobis obcaecati
                            laboriosam? Sint deserunt provident maiores
                            architecto enim dicta, porro dignissimos
                            reprehenderit deleniti nobis ducimus delectus quasi
                            molestias mollitia odio quo sequi ullam nulla
                            quibusdam obcaecati. Nobis, veritatis!
                          </p>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-reply pr-1"></i> Reply
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Details</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Reported by</label>
                        <p class="form-control">John Smith</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Priority</label>
                        <select class="form-control" name="" id="">
                          <option value="">High</option>
                          <option value="">Medium</option>
                          <option value="">Low</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="" id="">
                          <option value="">In Progress</option>
                          <option value="">On Hold</option>
                          <option value="">Resolved</option>
                          <option value="">Closed</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <p><strong>Date:</strong> 4.16.2023</p>
                  <p><strong>Time:</strong> 3:13 PM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Add Reply -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Your message</label>
                        <textarea
                          name=""
                          id=""
                          class="form-control"
                          cols="30"
                          rows="10"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-plus pr-1"></i> Add Reply
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Add Reply -->

          <!-- Issue Replies -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="d-flex flex-column gap-2">
                    <h5 class="title mb-0">Kristian Marku</h5>
                    <p>Admin</p>
                  </div>
                  1 Hour ago
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <p class="form-control rounded-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Itaque repellendus magni nobis obcaecati
                          laboriosam? Sint deserunt provident maiores architecto
                          enim dicta, porro dignissimos reprehenderit deleniti
                          nobis ducimus delectus quasi molestias mollitia odio
                          quo sequi ullam nulla quibusdam obcaecati. Nobis,
                          veritatis!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-info">
                    <i class="fa-solid fa-pencil pr-1"></i>
                  </button>
                  <button class="btn btn-danger">
                    <i class="fa-solid fa-trash pr-1"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Issue Replies -->
        </div>
@endsection
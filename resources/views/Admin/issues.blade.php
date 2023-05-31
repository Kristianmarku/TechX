@extends('layouts.staff.main')
@section('title', 'Issues')

@section('content')
        <div class="panel-header panel-header-sm"></div>
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Reported by John Smith</div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3>
                      Error while purchasing a product on sale!
                    </h3>
                    <p>4 hours ago</p>
                  </div>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Quasi quidem dolores ipsa eaque labore, nostrum nihil sapiente
                  mollitia. Asperiores optio ipsam est, ducimus ipsum ratione
                  ipsa earum tempora totam! Cum quo neque voluptas? Eaque beatae
                  magnam dolore fugit nesciunt? Harum, et quod quos vero
                  inventore iste autem dolore est, voluptate nam reiciendis
                  facere sunt aut quasi labore voluptatibus incidunt? Qui,
                  repellat. Iusto cum deserunt adipisci quos officiis inventore
                  ex dolore dolor, eaque aperiam culpa accusamus pariatur,
                  cumque eos deleniti ullam aliquid tempora ad nesciunt! A
                  magnam provident vero, modi iste fugit ducimus deserunt,
                  reprehenderit, earum rerum ipsa quas laborum! Delectus.
                </div>
                <div class="card-footer">
                  <div class="d-flex justify-content-between">
                    <div>
                      <!-- Priority -->
                      <p class="badge badge-danger p-2">
                        <i class="fa-solid fa-arrow-up"></i> High
                      </p>

                      <!-- <p class="badge badge-warning text-light p-2">
                        <i class="fa-solid fa-triangle-exclamation"></i> Medium
                      </p>

                      <p class="badge badge-dark p-2">
                        <i class="fa-solid fa-arrow-down"></i> Low
                      </p> -->

                      <!-- Status -->
                      <p class="badge badge-success p-2">New</p>
                      <!-- <p class="badge badge-danger">In Progress</p>
                      <p class="badge badge-danger">On Hold</p>
                      <p class="badge badge-danger">Resolved</p>
                      <p class="badge badge-danger">Closed</p> -->
                    </div>
                    <a href="{{route('view.issue')}}" class="btn btn-primary">Open Issue</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Reported by John Smith</div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3>
                      Having issues with adding a credit-card 
                    </h3>
                    <p>4 hours ago</p>
                  </div>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Quasi quidem dolores ipsa eaque labore, nostrum nihil sapiente
                  mollitia. Asperiores optio ipsam est, ducimus ipsum ratione
                  ipsa earum tempora totam! Cum quo neque voluptas? Eaque beatae
                  magnam dolore fugit nesciunt? Harum, et quod quos vero
                  inventore iste autem dolore est, voluptate nam reiciendis
                  facere sunt aut quasi labore voluptatibus incidunt? Qui,
                  repellat. Iusto cum deserunt adipisci quos officiis inventore
                  ex dolore dolor, eaque aperiam culpa accusamus pariatur,
                  cumque eos deleniti ullam aliquid tempora ad nesciunt! A
                  magnam provident vero, modi iste fugit ducimus deserunt,
                  reprehenderit, earum rerum ipsa quas laborum! Delectus.
                </div>
                <div class="card-footer">
                  <div class="d-flex justify-content-between">
                    <div>
                      <!-- Priority -->
                      <p class="badge badge-danger p-2">
                        <i class="fa-solid fa-arrow-up"></i> High
                      </p>

                      <!-- <p class="badge badge-warning text-light p-2">
                        <i class="fa-solid fa-triangle-exclamation"></i> Medium
                      </p>

                      <p class="badge badge-dark p-2">
                        <i class="fa-solid fa-arrow-down"></i> Low
                      </p> -->

                      <!-- Status -->
                      <p class="badge badge-success p-2">New</p>
                      <!-- <p class="badge badge-danger">In Progress</p>
                      <p class="badge badge-danger">On Hold</p>
                      <p class="badge badge-danger">Resolved</p>
                      <p class="badge badge-danger">Closed</p> -->
                    </div>
                    <button class="btn btn-primary">Open Issue</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
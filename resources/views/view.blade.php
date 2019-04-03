<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="card col-sm-12">
        <div class="card-header">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">First Record</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">Previous Record</a></li>
              <li class="page-item" aria-current="page">
                <a class="page-link" href="#">Next Record</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">Last Record</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Back To List</a>
              </li>
            </ul>
            <ul class="pagination float-left">
              <li>1/1</li>
            </ul>
            <ul class="pagination float-right">
              <li><i class="fa fa-trash fa-4x" style="color:red" aria-hidden="true"></i></li>
            </ul>
          </nav>
        </div>
        <div class="card-body">
          <div class="alert alert-primary" role="alert">
            A simple primary alert—check it out!
          </div>
          <p class="card-text">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First (Spouse)</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="First (Spouse)">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last (Spouse)</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Last (Spouse)">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Salutation</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Salutation">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Spanish</label>
                  <input type="checkbox">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Company Name</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Company Name">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Title</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Last (Spouse)">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Association Type</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
            </form>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card col-sm-12">
        <div class="card-header">
          Mailing Address
        </div>
        <p class="card-text">
          <form>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">Phone Unknown</label>
                <input type="checkbox">
                <label for="inputPassword4">Mobile Phone</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Mobile Phone Number">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Office Phone</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Office Phone">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Home Phone</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Home Phone">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Fax</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Fax">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">E-Mail Address:</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Website</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">Linked In</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Linked In">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Facebook</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Facebook">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Marketing Plan</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
                <label for="inputPassword4">Paused</label>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Notes</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="checkbox">
                <label for="inputAddress2">Have Met</label>
              </div>
              <div class="form-group col-md-6">
                <input type="checkbox">
                <label for="inputAddress2">Have Talked</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputAddress2">
                  <a href="#">Update Record</a>
                </label>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-light">Update and Return to List</button>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-danger">Kill If Lead</button>
              </div>
            </div>
          </form>
        </p>
      </div>
    </div>
    <div class="col">
      <hr>
    </div>
    <div class="row">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list"
            aria-selected="false">Lists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Contact Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="leads-tab" data-toggle="tab" href="#leads" role="tab" aria-controls="leads"
            aria-selected="false">Leads</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div id="jsGrid"></div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Property Code:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Valuation Date:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Value (CMA):</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Value (Zillow):</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Property Type:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Bedrooms:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Bathrooms:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Square Feet:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Lot Size:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Year Built:</lablel>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Notes:</lablel>
                        <textarea class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                      <i class="fa fa-file-image-o fa-5x" aria-hidden="true"></i>
                      <div class="card-body">
                        <div class="form-group">
                          <input type="file" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                      <i class="fa fa-file-image-o fa-5x" aria-hidden="true"></i>
                      <div class="card-body">
                        <div class="form-group">
                          <input type="file" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Agents</li>
            <li class="list-group-item">Agents (Bay Area)</li>
            <li class="list-group-item">Aptos Business Owners</li>
            <li class="list-group-item">Aptos E-Marketing</li>
            <li class="list-group-item">Book Receipients</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-light float-right" data-toggle="modal"
            data-target=".bd-example-modal-lg">+</button>
          <div id="jsGridContact"></div>
        </div>
        <div class="tab-pane fade" id="leads" role="tabpanel" aria-labelledby="leads-tab">
        </div>
      </div>
    </div>

    <!--Modal-->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-trash fa-3x" style="color:red" aria-hidden="true"></i>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="container">
            <form>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <h5>Contact:</h5>
                  <label for="inputEmail4">Culliton, Kevin</label>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Marketing Plan:</label>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Subject/Conversation</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Marketing Piece:</label>
                  <select id="inputState" class="form-control">
                    <option selected>Followup Call - Followup Call</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Type:</label>
                  <select id="inputState" class="form-control">
                    <option selected>Phone Call</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Contact On:</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label=""
                      aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">At</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Date Contacted:</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Automated:</label>
                  <input type="checkbox">
                </div>
                <div class="form-group col-md-4">
                  <label>Skip:</label>
                  <input type="checkbox">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Priority Level:</label>
                  <select id="inputState" class="form-control">
                    <option selected>Priority...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col align-self-center">
                  <Button type="button" class="btn btn-light">Submit</Button>
                </div>
              </div>
            </form>
            <div class="col">
              <hr>
            </div>
            <div class="container">
              <div class="row">
                <a href="#">Print Letter</a>
              </div>
              <div class="row">
                <a href="#">Print Envelope</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  var clients = [];

  var countries = [
    { Name: "", Id: 0 },
    { Name: "United States", Id: 1 },
    { Name: "Canada", Id: 2 },
    { Name: "United Kingdom", Id: 3 }
  ];

  $("#jsGrid").jsGrid({
    width: "100%",
    height: "400px",

    inserting: false,
    editing: false,
    sorting: true,
    paging: true,
    pageSize: 10,

    data: clients,

    fields: [
      { name: "Date / Time", type: "text", width: 100 },
      { name: "Method / Result", type: "number", width: 100 },
      { name: "Subject", type: "text", width: 200 },
      { name: "Notes", type: "select", items: countries, valueField: "Id", textField: "Name" },
    ],
    rowClick: function (args) {
      window.location = "/app/public/view";
    }
  });

  $("#jsGridContact").jsGrid({
    width: "100%",
    height: "400px",

    inserting: false,
    editing: false,
    sorting: true,
    paging: true,
    pageSize: 10,

    data: clients,

    fields: [
      { name: "Contact On", type: "text" },
      { name: "Priority", type: "number" },
      { name: "Auto", type: "text" },
      { name: "Skip", type: "text" },
      { name: "Date Contacted", type: "text" },
      { name: "Type", type: "text" },
      { name: "Plan", type: "text" },
      { name: "What", type: "select", items: countries, valueField: "Id", textField: "Name" },
    ],
    rowClick: function (args) {
      window.location = "/app/public/view";
    }
  });
</script>

</html>
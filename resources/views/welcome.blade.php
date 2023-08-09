<!DOCTYPE HTML>
<html>

<head>
    <title>blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5">Admission Form</h4>
        <form action="">
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="father_name" class="form-label">Father Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="father_name" class="form-control" id="father_name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="mother_name" class="form-label">Mother Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="mother_name" class="form-control" id="mother_name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="date" class="form-label">Date of birth:</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="date" class="form-control" id="date">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="phone" class="form-label">Phone number:</label>
                </div>
                <div class="col-md-4">
                    <input type="numric" name="phone" class="form-control" id="phone">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="col-md-4">
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="country" class="form-label">Nationality:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="country" class="form-control" id="country">
                </div>
            </div>

            <select class="form-select form-select-sm mt-3" aria-label=".form-select-sm example">
                <option selected>Subject</option>
                <option value="1">CSE</option>
                <option value="2">BBA</option>
                <option value="3">MBA</option>
            </select>

            <label class=" mt-3" for="gender">Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">Other</label>
              </div>
              <div class="mt-3">
                  <button class="btn btn-info" type="reset">Reset</button>
            <button  class="btn btn-success" type="submit">Submit</button>
        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

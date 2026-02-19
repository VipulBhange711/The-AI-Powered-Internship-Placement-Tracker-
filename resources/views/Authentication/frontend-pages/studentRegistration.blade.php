<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 | Student Registration</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  <style>
    /* small tweak for select alignment */
    .form-select-lg {
      height: calc(1.5em + 1rem + 2px); 
      padding: 0.5rem 1rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.3rem;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto"> <!-- slightly wider for more fields -->
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../assets/images/logo.svg" alt="logo">
              </div>
              <h4>Student registration</h4>
              <h6 class="fw-light">Fill your academic details to complete the profile</h6>

              <!-- 
                FORM MAPPED TO students SCHEMA:
                - user_id is usually hidden or taken from auth (not shown)
                - roll_number, enrollment_number, department, course, semester, passing_year, current_cgpa, active_backlogs
                - is_placement_eligible (checkbox), placement_status (select)
              -->
              <form class="pt-3">
                <!-- two column row for roll & enroll -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Roll number <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-lg" placeholder="e.g. 2021CS101" name="roll_number" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Enrollment number (optional)</label>
                      <input type="text" class="form-control form-control-lg" placeholder="e.g. ENR123456" name="enrollment_number">
                    </div>
                  </div>
                </div>

                <!-- department & course row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Department</label>
                      <select class="form-select form-select-lg" name="department" required>
                        <option value="" disabled selected>Select department</option>
                        <option>Computer Science</option>
                        <option>Information Technology</option>
                        <option>Electronics & Comm.</option>
                        <option>Mechanical Engineering</option>
                        <option>Civil Engineering</option>
                        <option>Electrical Engineering</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Course</label>
                      <select class="form-select form-select-lg" name="course" required>
                        <option value="" disabled selected>Select course</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                        <option>BCA</option>
                        <option>MCA</option>
                        <option>B.Sc (CS)</option>
                        <option>M.Sc (CS)</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- semester & passing year row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Semester</label>
                      <select class="form-select form-select-lg" name="semester" required>
                        <option value="" disabled selected>Semester</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Passing year</label>
                      <input type="number" class="form-control form-control-lg" placeholder="2025" name="passing_year" min="2000" max="2040" required>
                    </div>
                  </div>
                </div>

                <!-- CGPA & active backlogs -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Current CGPA (optional)</label>
                      <input type="number" step="0.01" class="form-control form-control-lg" placeholder="8.75" name="current_cgpa">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-muted mb-1">Active backlogs</label>
                      <input type="number" class="form-control form-control-lg" placeholder="0" name="active_backlogs" value="0" min="0">
                    </div>
                  </div>
                </div>

                <!-- Placement eligibility (boolean) + status -->
                <div class="row align-items-center mb-3">
                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="is_placement_eligible" checked> 
                        Eligible for placement
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-select" name="placement_status">
                        <option value="Not Placed" selected>Not Placed</option>
                        <option value="Placed">Placed</option>
                        <option value="Internship">Internship</option>
                        <option value="Higher Studies">Higher Studies</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- terms and conditions (original kept) -->
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required> I confirm that the information provided is accurate
                    </label>
                  </div>
                </div>

                <!-- submit button -->
                <div class="mt-3 d-grid gap-2">
                  <a class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" href="../../index.html">REGISTER STUDENT</a>
                </div>

                <!-- login redirect (keep as original style) -->
                <div class="text-center mt-4 fw-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>

              <!-- hint mapping (small note) -->
              <div class="mt-4 text-muted text-small">
                <small>Fields match exactly: roll, enrollment, department, course, semester, passing_year, cgpa, backlogs, eligibility, status.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Template</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <form action="newupdate.php" method="post">
        <h4 class="font-weight-bold py-3 mb-4">Account settings</h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        
                        <div class="tab-pane fade show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img id="profile-picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    alt class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-secondary">
                                        Upload new photo
                                        <input type="file" id="profile-picture-input"
                                            class="account-settings-fileinput" onchange="updateProfilePicture()">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF, or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="" name="uname">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" value="" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" name="bio"
                                        rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="May 3, 1995" name="dob">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="custom-select" name="coun">
                                        <option>USA</option>
                                        <option selected>INDIA</option>
                                        <option>UK</option>
                                        <option>Germany</option>
                                        <option>France</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value name="website">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value="https://twitter.com/user" name="twit">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="https://www.facebook.com/user" name="face">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" value name="google">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" value name="link1">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="https://www.instagram.com/user" name="insta">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <input type="submit" class="btn btn-secondary" value="Save changes" name="submit">
<!--            <input type="button" class="btn btn-default" value="Cancel" name="cancel">-->
        </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

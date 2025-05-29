<section class="content">

            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                            <?php 
                                $this->load->view(SITE_THEME_FOR_VIEW.'site_theme/admin_navigation');   
                                $this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_search_box');
                                
                            ?>   
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>

                        <!--end col-md-3-->
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-lg-9 col-md-12 col-sm-12">

                                

                       <!--============ Section Title===================================================================-->
                       <div class="" style="">  
                         <h2>Search User</h2>
                                <!--============ Side Bar Search Form ===============================================-->
                              <form id="userfilter" class="form">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-2">
                                        <input type="text" name="profile" id="profile" class="form-control" placeholder="Search name/id">
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
                                        <input type="button" value="Search" onclick="search_user()" class="btn btn-primary width-100 btn-success">
                                    </div>
                                </div>
                                <input type="hidden" id="url" value="<?php echo base_url(); ?>">
                            </form>


                        </div>
                         <section class="signinbox" id="user_data" style="display: none;">
                            <h2>User Results</h2>
                            <div id="user_result_container">
                                <!-- Search results will appear here -->
                            </div>
                        </section>

                                
                            
                          
               </div>         
            </div>
            <!--end col-md-9-->    
        </div>
        <!--end row-->
        </div>
        <!--end container-->   
        </div>          
        </div>
    </div>  
    </section>
    <!--end block-->
</section>

<script>
function search_user() {
    const form = document.getElementById('userfilter');
    const formData = new FormData(form);
     const input = document.getElementById('profile');
    const keyword = input.value.trim();

    if (!keyword) {
        alert('Please enter a name or ID to search.');
        input.focus();
        return;
    }
    const url = document.getElementById('url').value + 'admin/search_users';

    fetch(url, {
        method: 'POST',
        body: new URLSearchParams([...formData.entries()]) // convert FormData to x-www-form-urlencoded
    })
    .then(response => response.text())
    .then(html => {
        // Replace contents of the result div
        document.getElementById('user_data').innerHTML = html;
        document.getElementById('user_data').style.display = 'block';
    })
    .catch(error => {
        console.error('AJAX request failed:', error);
        alert('Something went wrong!');
    });
}

function deleteUser(userId) {
    if (!confirm("Are you sure you want to delete this user?")) return;

    fetch('<?php echo base_url("admin/delete_user"); ?>', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `id=${userId}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("User deleted successfully.");
            filter_data(); // Refresh results
        } else {

            alert("Failed to delete user.");
        }
    })
    .catch(error => {
        console.error('Delete error:', error);
        alert("Something went wrong.");
    });
}

function changeRole(userId) {
    if (!confirm("Are you sure you want to change this user's role to Manager?")) return;

    fetch('<?php echo base_url("admin/change_user_role"); ?>', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `id=${userId}&role=3`  // role = 3 for manager
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("User role updated to Manager.");
            filter_data(); // Refresh results
        } else {
            alert("Failed to change role.");
        }
    })
    .catch(error => {
        console.error('Role change error:', error);
        alert("Something went wrong.");
    });
}
</script>




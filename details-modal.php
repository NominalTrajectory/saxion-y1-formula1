<div class="modal fade details-1" id="details" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title text-center"><span id="drivername"></span></h2>

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <div class="center-block">
                  <img src="" id="photo" alt="driver" class="details img-responsive"/>
                </div>
              </div>
              <div class="col-sm-6">
                <h2>Details</h2>
                <p><div id="description"></div></p>
                <hr />
                <p>Nationality: <span id="nationality"></span></p>
                <p>Date of Birth: <span id="dateofbirth"></span></p>
                <p>Team: <span id="teamname"></span></p>
                <p>Season: <span id="season"></span></p>
                <form action="add_cart.php" method="post">
                
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

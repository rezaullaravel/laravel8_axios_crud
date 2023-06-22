<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addForm">
        <div class="showErr"></div>
        <div class="modal-body">

          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
          </div>

           <div class="form-group">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number">
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="add_memeber">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
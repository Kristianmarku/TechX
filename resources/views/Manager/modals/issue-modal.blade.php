 <div class="modal fade" id="issueModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="issueModalLabel" aria-hidden="true">
  <form action="{{ route('add.issue') }}" method="POST">
    @csrf 
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="issueModalLabel">Report Issue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" placeholder="Issue Title" />
                @error('title')
                <p class="text-danger p-2">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Issue description..." ></textarea>
                @error('title')
                <p class="text-danger p-2">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </form>
</div>
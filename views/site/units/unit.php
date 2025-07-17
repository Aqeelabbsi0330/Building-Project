<div class="app-content pt-10 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">Unit Form</h1>
    <hr class="mb-4">

    <div class="app-card app-card-settings p-4 border rounded-3 bg-white">
      <div class="app-card-body">
        <form class="row g-3">

          <!-- Building Number -->
          <div class="col-md-6">
            <label for="building-number" class="form-label fw-semibold">Building Number</label>
            <input type="text" class="form-control" id="building-number" name="buildingNumber" placeholder="Enter Building Number">
          </div>

          <!-- Floor Number -->
          <div class="col-md-6">
            <label for="floor-number" class="form-label fw-semibold">Floor Number</label>
            <input type="text" class="form-control" id="floor-number" name="floorNumber" placeholder="Enter Floor Number">
          </div>

          <!-- Area -->
          <div class="col-md-6">
            <label for="area" class="form-label fw-semibold">Area (sq ft)</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area">
          </div>

          <!-- Status -->
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select class="form-select" id="status" name="status">
              <option selected disabled>Select Status</option>
              <option value="Available">Available</option>
              <option value="Occupied">Occupied</option>
              <option value="Maintenance">Maintenance</option>
            </select>
          </div>

          <!-- Submit -->
          <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4 text-light">Save</button>
          </div>
        </form>
      </div><!-- app-card-body -->
    </div><!-- app-card -->
  </div><!-- container-xl -->
</div><!-- app-content -->

<form class="form-inline" action="/search" method="GET">
  <div class="form-group">
    <input type="text" class="form-control" id="search" name="searchString" aria-describedby="search" placeholder="Search characters" value="<?= $_GET['searchString'] ?? '' ?>">
  </div>
  <?php $attr = $_GET['characterAttributes'] ?? '' ?>
  <div class="form-group">
    <select class="form-control" id="characterAttributes" name="characterAttributes">
    	<option value="name" <?= $attr == 'name' ? 'selected' : '' ?>>Name</option>
    	<option value="status" <?= $attr == 'status' ? 'selected' : '' ?>>Status</option>
    	<option value="species" <?= $attr == 'species' ? 'selected' : '' ?>>Species</option>
    	<option value="type" <?= $attr == 'type' ? 'selected' : '' ?>>Type</option>
    	<option value="gender" <?= $attr == 'gender' ? 'selected' : '' ?>>Gender</option>
    </select>
  </div>

  <div class="form-group">
	  <button type="submit" class="btn btn-primary">Search</button>
  </div>
</form>
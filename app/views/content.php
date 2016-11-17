<form class="form" action="" method="post">
  <div class="form-group">
    <label for="dateDeparture">Date of Departure</label>
    <input type="date" class="form-control" name="dateDeparture">
  </div>

  <div class="form-group">
    <label for="dateReturn">Date of Return</label>
    <input type="date" class="form-control" name="dateReturn">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email">
  </div>

  <div class="form-group">
    <label for="reason">Reason for Visit</label>
    <textarea class="form-control" name="reason"></textarea>
  </div>

  <button type="submit" value="submit" class="btn">Submit</button>
</form>
<?php echo  'The total number of requests is currently ' . $db->countAll(); ?>

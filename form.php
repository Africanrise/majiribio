<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  </head>
  <body>
    <section>
      <div class="container">
        <br><br>
        <h3>Form Send WhatsApp</h3>
        <br><br>
        <div class="row">
          <div class="col-6">
            <form action="send.php" method="post" target="_blank">
            <div class="form-group">
              <label for="name">Names</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your names">
            </div>

            <div class="form-group">
              <label for="living" > Where do live?</label>
              <input type="text" class="form-control" name="living" placeholder="Enter your location of residency">
            </div>

            <div class="form-group">
              <label for="delivering"> Where should we deliver your meal?</label>
              <textarea class="form-control" rows="3" name="delivering" placeholder="Enter location of delivering (Explain briefly)"></textarea>
            </div>

            <div class="form-group">
              <label for="phonenumbers">Enter your phone numbers</label>
              <input type="number" class="form-control" name="phoneNumber" placeholder="0687883135">
            </div>

            <div class="form-group">
              <label for="order" >Your Order</label>
              <textarea class="form-control"name="order"  rows="3"></textarea>
            </div>
            <input type="hidden" name="savio" value="624274879">


            <button type="submit" name="submit" class="btn btn-primary ">Send</button>
          </form>
          </div>

        </div>

      </div>
    </section>
  </body>
</html>

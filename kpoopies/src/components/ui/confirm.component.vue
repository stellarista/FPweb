<template>
<div class="container-fluid" style="padding: 0px">

 <div class="img-responsive bgimg-2"> 
  <div class="prod">
  Confirm Payment
  </div>
 </div>


  <div class="container" style="">

   <div class="row" style="padding-top: 20px">

    <!-- <div class="col-sm-4" style="">
     <img src="mxicon.jpg" class="img-responsive">
    </div> -->

    <div class="col-sm-12" style="background-color: #ffb7aa;">
     <div class="row" style="padding: 20px">
     <p> 
      Customer MUST report the payment by fill the form below. We will confirm the order maximum 1x24 (please be patient)
     </p>
     </div>

     <div class="row" style="padding: 20px">
      <p>
      Transfer to (choose one):<br>
      - BCA 1234567891 (Ignatia Stellarista)<br>
      - Mandiri 6789123331 (Angeline Indahsi)
      </p>
     </div>

     <div class="row" style="padding: 20px">

      <form role="form" style="margin-top: 0px; background-color: #ffb7aa"@submit.prevent="storeCheckout()">
       <div class="form-group">
        <label for="transdate" class="col-sm-2 col-form-label">Transaction Date:</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" placeholder="" required v-model="checkout.transaction_date">
        </div>
       </div>
       
       <div class="form-group">
        <label for="account_id" class="col-sm-2 col-form-label">Account ID:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="" required v-model="checkout.account_id">
        </div>
       </div>

       <div class="form-group">
        <label for="product_id" class="col-sm-2 col-form-label">Product ID:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="" required v-model="checkout.product_id">
        </div>
       </div>
       
       <div class="form-group">
        <label for="bank_id" class="col-sm-2 col-form-label">Bank:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="1. BCA / 2. BANK MANDIRI" required v-model="checkout.bank_id">
        </div>
       </div>

       <div class="form-group">
        <label for="amount" class="col-sm-2 col-form-label">Amount Transfered:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="" required v-model="checkout.amount">
        </div>
       </div>

       <div class="form-group">
        <label for="receipt" class="col-sm-2 col-form-label">Receipt Image Link:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="upload your image on tinypic and insert the link for layout | if haven't pay yet, type 'empty' " required v-model="checkout.receipt_img">
        </div>
       </div>

       <div class="form-group">
        <label for="payment_status" class="col-sm-2 col-form-label">Payment / Shipping Status:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="type done" required v-model="checkout.payment_status">
        </div>
       </div>

       
       <div class="text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      </form>

     </div>

    </div>

   
   </div>

  </div>
 
</div>
</template>

<script src="./confirm.component.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="product.css">

<style type="text/css">
.w {
  width: 250px;
}
</style>
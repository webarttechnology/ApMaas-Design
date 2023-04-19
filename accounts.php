<?php include("header.php") ?>
<div class="main-panel ysecprty timesecpart">
<div class="content-wrapper">
   <div class="row">
      <div class="col-md-12">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#tansac" type="button" role="tab" aria-controls="contact" aria-selected="true">Transaction</button>
            </li>
            <li class="nav-item">
               <button class="nav-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="plans" aria-selected="false">Bank Reconsilation</button>
            </li>
            <li class="nav-item">
               <button class="nav-link" id="deposit-tab" data-toggle="tab" href="#deposit" role="tab" aria-controls="plans" aria-selected="false">Deposit Slips</button>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tansac" role="tabpanel" aria-labelledby="contact-tab">
               <div class="row">
                  <div class="col-md-3">
                     <div class="panel-filter side-menu-block">
                        <h3>View</h3>
                        <ul class="side-menu-list capitalize">
                           <li class="">Trust Accounts</li>
                           <li class="indent active">Trust Account</li>
                           <li class="indent2">- Protected Funds</li>
                           <li class="">Operating Retainer Account</li>
                           <li class="">Ledger</li>
                           <li class="">credit memo Ledger</li>
                        </ul>
                        <div>
                           <h3><span class="uppercase">checks</span></h3>
                           <ul class="side-menu-list">
                              <li class="">Trust <span class="capitalise">checks</span></li>
                              <li class=""><span>Operating Checks</span></li>
                           </ul>
                           <br />
                        </div>
                        <div>
                        </div>
                     </div>
                     <div id="accordion2">
                        <div class="card">
                           <div class="card-header" id="headingTwo2">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                 Trust Account
                                 </button>
                              </h5>
                           </div>
                           <div class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">All</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Current</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Deleted</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>Trust Account</h5>
                     </div>
                     <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">Deposit Funds</button>
                        <button type="button" class="cmnbtn">Transfer Funds</button>
                        <button type="button" class="cmnbtn">Protect Funds</button>
                        <button type="button" class="cmnbtn disabled">Print Checks</button>
                     </div>
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Transaction</th>
                                 <th>Description</th>
                                 <th>Refence</th>
                                 <th>Matter</th>
                                 <th>Debit</th>
                                 <th>Credit</th>
                                 <th>Balance</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="plans-tab">
               <div class="row">
                  <div class="col-md-3">
                     <div id="accordion">
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Contact Status
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">All</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Current</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Deleted</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>DEBTORS WITH PAYMENT PLANS (0)</h5>
                     </div>
                     <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">EXPORT CSV</button>
                        <button type="button" class="cmnbtn">CREATE NEW PLAN</button>
                     </div>
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Organization</th>
                                 <th>Phone</th>
                                 <th>Email</th>
                                 <th>Last Payment</th>
                                 <th>Paid</th>
                                 <th>Outstanding</th>
                                 <th>Status</th>
                                 <th>Plan Details</th>
                                 <th>Type</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
               <div class="row">
                  <div class="col-md-3">
                     <div id="accordion">
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Contact Status9999
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">All</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Current</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul class="listingprt">
                                    <li>
                                       <div class="my-2">
                                          <a href="#">Deleted</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="my-2">
                                          <a href="#" class="numbtn mr-1">0</a>
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="opnmtrs">
                        <h5>DEBTORS WITH PAYMENT PLANS (0)</h5>
                     </div>
                     <div class="btnmtrs pt-2 pb-3">
                        <button type="button" class="cmnbtn mr-2">EXPORT CSV</button>
                        <button type="button" class="cmnbtn">CREATE NEW PLAN</button>
                     </div>
                     <div class="table-responsive">
                        <table class="table bg-white">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Organization</th>
                                 <th>Phone</th>
                                 <th>Email</th>
                                 <th>Last Payment</th>
                                 <th>Paid</th>
                                 <th>Outstanding</th>
                                 <th>Status</th>
                                 <th>Plan Details</th>
                                 <th>Type</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer.php") ?>
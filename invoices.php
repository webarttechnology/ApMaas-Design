<?php include("header.php") ?>

<div class="main-panel ysecprty">
               <div class="content-wrapper">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="invoices-tab" data-toggle="tab" data-target="#invoices" type="button" role="tab" aria-controls="invoices" aria-selected="true">INVOICES</button>
                           </li>
                            <li class="nav-item">
                        <button class="nav-link" id="crinvoices-tab" data-toggle="tab" href="#crinvoices" role="tab" aria-controls="crinvoices" aria-selected="false">CREATE INVOICES</button>
                     </li>
                     <li class="nav-item">
                        <button class="nav-link" id="finalize-tab" data-toggle="tab" href="#finalize" role="tab" aria-controls="finalize" aria-selected="false">FINALIZE WITH PAYMENTS</button>
                     </li>
                     <li class="nav-item">
                        <button class="nav-link" id="bulk-tab" data-toggle="tab" href="#bulk" role="tab" aria-controls="bulk" aria-selected="false">BULK TRUST PAYMENT</button>
                     </li>
                     <li class="nav-item">
                        <button class="nav-link" id="reminders-tab" data-toggle="tab" href="#reminders" role="tab" aria-controls="reminders" aria-selected="false">REMINDERS</button>
                     </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="invoices" role="tabpanel" aria-labelledby="invoices-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div id="accordion">
                                       <div class="card">
                                          <div class="card-header" id="headingOne">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Status
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Recently Viewed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Draft</a>
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
                                                         <a href="#">Unpaid</a>
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
                                                         <a href="#">Overdue</a>
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
                                                         <a href="#">Paid</a>
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
                                                         <a href="#">Void</a>
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
                                       <div class="card">
                                          <div class="card-header" id="headingTwo">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Issue Date
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>  
                                                 <li class="pb-2"><a href="#">All</a></li>
                                                 <li class="pb-2"><a href="#">This Month</a></li>
                                                 <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">Before </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value inline-block">
                                                            <input type="date" class="form-control currency"></div>
                                                      </div>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">From </span>
                                                      <div class="inline-block">
                                                         <div class="input-group">
                                                            <input type="date" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">To </span>
                                                      <div class="inline-block">
                                                         <div class="input-group">
                                                            <input type="date" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingThree">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Sent Status
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">All</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Sent</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Failed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Not Sent</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                       <div class="card">
                                          <div class="card-header" id="headingFour">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Online Invoice
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Viewed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                       <div class="card">
                                          <div class="card-header" id="headingFive">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Billing Type
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">All</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Time Based</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Fixed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Contingency</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                       <div class="card">
                                          <div class="card-header" id="headingSix">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                Matter Type
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <form>
                                                   <div class="form-check">
                                                      <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                      Select / De-select All
                                                      <i class="input-helper"></i><i class="input-helper"></i></label>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingSeven">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                Matter Status
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">All</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Open</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Pending</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Closed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Cancelled</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                       <div class="card">
                                          <div class="card-header" id="headingEight">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                Attorney Responsible
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <div class="btnprt mb-2">
                                                   <button type="button" class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                   <a href="#" class="mr-3">Select All</a>
                                                   <a href="#">Clear All</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingNine">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                Debtor Balances
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion" style="">
                                             <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">At least $</span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value inline-block">
                                                            <input type="number" step="0.01" class="form-control currency" value="">
                                                         </div>
                                                      </div>
                                                      <span class="balance-type-label">in Trust</span>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">At least $ </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value"><input type="number" step="0.01" class="form-control currency" value="">
                                                         </div>
                                                      </div>
                                                      <span class="balance-type-label">in Operating</span></div></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="btnmtrs">
                                       <button type="button" class="cmnbtn mr-2">DOWNLOAD (0)</button>
                                       <button type="button" class="cmnbtn mr-2">FINALIZE (0)</button>
                                       <button type="button" class="cmnbtn mr-2">DELETE DRAFTS (0)</button>
                                       <button type="button" class="cmnbtn mr-2">EMAIL (0)</button>
                                       <button type="button" class="cmnbtn mr-2">ADD PAYMENT</button>
                                       <button type="button" class="cmnbtn">ADD CREDIT</button>
                                    </div>
                                    <div class="table-responsive">
                                       <table class="table bg-white">
                                          <thead>
                                             <tr>
                                                <th>Status</th>
                                                <th>Issued</th>
                                                <th>Invoice #</th>
                                                <th>Debtor(s)</th>
                                                <th>Matter</th>
                                                <th>Amount</th>
                                                <th>Credit</th>
                                                <th>Paid (Inc Interest)</th>
                                                <th>Unpaid (Inc Interest)</th>
                                                <th>Sent?</th>
                                                <th>Viewed</th>
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
                                                <td></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="crinvoices" role="tabpanel" aria-labelledby="crinvoices-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div id="accordion">
                                       <div class="card">
                                          <div class="card-header" id="headingTen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                List
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>
                                                   <li class="py-2"><a href="#">A-Z</a></li>
                                                   <li><a href="#">Grouped By Client</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingEleven">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                Show
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>
                                                   <li class="py-2"><a href="#">All unbilled matters</a></li>
                                                </ul>
                                                <div class="debtor-balances">
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">At least $ </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value inline-block">
                                                            <input type="number" step="0.01" class="form-control currency" value="">
                                                         </div>
                                                      </div>
                                                      <span class="balance-type-label"> in Trust</span>
                                                   </div>
                                                </div>   
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingTwelve">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                For Entries Dated
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>  
                                                 <li class="pb-2"><a href="#">All</a></li>
                                                 <li class="pb-2"><a href="#">This Month</a></li>
                                                 <li class="pb-2"><a href="#">Last Month</a></li>
                                                </ul>
                                                <div class="finalize">
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">Before </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value inline-block">
                                                            <input type="date" class="form-control currency"></div>
                                                      </div>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">From </span>
                                                      <div class="inline-block">
                                                         <div class="input-group">
                                                            <input type="date" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">To </span>
                                                      <div class="inline-block">
                                                         <div class="input-group">
                                                            <input type="date" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingThirteen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                Billing Type
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">All</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Time Based</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Fixed</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                                         <a href="#">Contingency</a>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="my-2">
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
                                       <div class="card">
                                          <div class="card-header" id="headingFourteen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                                Matter Type
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <form>
                                                   <div class="form-check">
                                                      <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                      Select / De-select All
                                                      <i class="input-helper"></i><i class="input-helper"></i></label>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingFifteen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                                                Matter Status
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <ul class="listingprt">
                                                   <li>
                                                      <div class="my-2">
                                                         <a href="#">Show All</a>
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
                                                         <a href="#">Open</a>
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
                                                         <a href="#">Pending</a>
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
                                                         <a href="#">Closed</a>
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
                                       <div class="card">
                                          <div class="card-header" id="headingSixteen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                Attorney Responsible
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion" style="">
                                             <div class="card-body">
                                                <div class="btnprt mb-2">
                                                   <button type="button" class="btn btn-outline-secondary btn-sm">None</button>
                                                </div>
                                                <div>
                                                   <a href="#" class="mr-3">Select All</a>
                                                   <a href="#">Clear All</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card">
                                          <div class="card-header" id="headingSeventeen">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                                                Debtor Balances
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion" style="">
                                             <div class="card-body" style="padding: 10px 15px;">
                                                <div class="debtor-balances">
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">At least $ </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value inline-block">
                                                            <input type="number" step="0.01" class="form-control currency" value="">
                                                         </div>
                                                      </div>
                                                      <span class="balance-type-label"> in Trust</span>
                                                   </div>
                                                   <div class="balance-type">
                                                      <span class="balance-type-label">At least $ </span>
                                                      <div class="inline-block">
                                                         <div class="input-group currency-input balance-value"><input type="number" step="0.01" class="form-control currency" value="">
                                                         </div>
                                                      </div>
                                                      <span class="balance-type-label"> in Operating</span></div></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="btnmtrs">
                                       <button type="button" class="cmnbtn mr-2">CREATE (0)</button>
                                    </div>
                                    <div class="table-responsive">
                                       <table class="table bg-white">
                                          <thead>
                                             <tr>
                                                <th>Client & Matter</th>
                                                <th>Unbilled</th>
                                                <th>Last Invoiced</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
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
                           <div class="tab-pane fade" id="finalize" role="tabpanel" aria-labelledby="finalize-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div id="accordion">
                                       <div class="card d-none">
                                          <div class="card-header" id="headingOne">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Roles
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>
                                                   <li class="py-2"><a href="#">All</a></li>
                                                   <li><a href="#">Clients</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
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
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="bulk" role="tabpanel" aria-labelledby="bulk-tab">
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
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="reminders" role="tabpanel" aria-labelledby="reminders-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div id="accordion">
                                       <div class="card d-none">
                                          <div class="card-header" id="headingOne">
                                             <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Roles
                                                </button>
                                             </h5>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                             <div class="card-body">
                                                <ul>
                                                   <li class="py-2"><a href="#">All</a></li>
                                                   <li><a href="#">Clients</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
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
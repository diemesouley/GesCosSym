<section>
    <div class="panel panel-primary">
        <!--<div class="panel-heading navyblue"> INVOICE</div>-->
        <div class="panel-body">
            <div class="row invoice-list">
                <div class="text-center corporate-id">
                    <img alt="" src="img/vector-lab.jpg">
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>ADRESSE DU FOURNISSEUR</h4>
                    <p>
                        <?= $amount->vendor_name; ?> <br>
                        Email: <?= $amount->email; ?><br>
                        Tel: <?= $amount->phone_no; ?>
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <!--<h4>SHIPPING ADDRESS</h4>
                    <p>
                        Vector Lab<br>
                        Road 1, House 2, Sector 3<br>
                        ABC, Dreamland 1230<br>
                        P: +38 (123) 456-7890<br>
                    </p>-->
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>INFO FACTURE</h4>
                    <ul class="unstyled">
                        <li>Numéro de facture	: <strong><?= $amount->purchase_no; ?></strong></li>
                        <li>Date de facturation		: <?= $amount->purchase_date; ?></li>
                        <!--<li>Due Date			: 2013-03-20</li>-->
                        <li>Statut de la facture <?php if($amount->due_amount != 0.00){?> <span class="badge bg-important"><?= $amount->due_amount;?></span><?php }?> <?php if($amount->due_amount == 0.00){ echo "<span class='label label-primary'>PAID</span>"; }
                            else{
                                echo "<span class='label label-warning'>NOT PAID</span>";
                            }
                            ?></li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>CODE D'ACHAT</th>
                        <th class="hidden-phone">PRODUIT</th>
                        <th class="">COÛT UNITAIRE</th>
                        <th class="">QUANTITÉ</th>
                        <th>TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $n=1; foreach ($history as $rows) {
                    ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $rows->purchase_no; ?></td>
                        <td class="hidden-phone"><?php echo $rows->item_name; ?></td>
                        <td class="">RS. <?php echo $rows->purchase_rate; ?></td>
                        <td class=""><?php echo $rows->purchase_qty; ?></td>
                        <td>RS. <?php echo $rows->purchase_amount; ?></td>
                    </tr>
                    <?php $n++;} ?>
                    </tbody>
                </table>
                </div>
            <div class="row">
                <div class="col-lg-4 invoice-block pull-right">
                    <ul class="unstyled amounts">
                        <li><strong>Sous - Montant total :</strong> Rs. <?php echo $amount->grand_total; ?></li>
                        <li><strong>Remise :</strong> <?php echo $amount->purchase_discount; ?>%</li>
                        <li><strong>Somme Finale :</strong>Rs. <?php echo $amount->purchase_amount_total; ?> </li>
                    </ul>
                </div>
            </div>
            <div class="text-center invoice-btn">
                <!--<a class="btn btn-danger btn-lg btn-xs"><i class="fa fa-check"></i> Submit Invoice </a>-->
                <a onclick="javascript:window.print();" class="btn btn-info btn-lg btn-xs"><i class="fa fa-print"></i> Imprimer </a>
            </div>
        </div>
    </div>
</section>






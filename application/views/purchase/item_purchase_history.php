

<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body">
                <div class="invoice">
                    <div class="row invoice-logo">
                        <div class="col-xs-6 invoice-logo-space">
                            <img src="<?= base_url(); ?>assets/pages/media/invoice/walmart.png" class="img-responsive"
                                 alt=""/></div>
                        <div class="col-xs-6">
                            <p> #<?php echo $amount->pur_no ?> / <?php echo $amount->purchase_date; ?>
                            </p>

                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-4">
                            <h3>FOURNISSEUR:</h3>
                            <ul class="list-unstyled">
                                <li> <?= $amount->vendor_name ?> </li>
                                <li> <?= $amount->company_name ?> </li>
                                <li> <?= $amount->email; ?> </li>
                                <li> <?= $amount->phone_no ?> </li>
                                <!--<li> Madrid </li>
                                <li> Spain </li>
                                <li> 1982 OOP </li>-->
                            </ul>
                        </div>
                        <div class="col-xs-4">

                        </div>
                        <div class="col-xs-4 invoice-payment">
                            <h3>Détails de paiement:</h3>
                            <div id="invoice">
                                <div class="date">Date de
                                    Facture d'achat: <?php echo date('M d,Y',strtotime($amount->purchase_date)); ?></div>
                                <div class="date">Statut de la facture <?php if ($amount->due_amount != 0.00) { ?>
                                        <span
                                            class="badge bg-important"><?= $amount->due_amount; ?></span><?php } ?> <?php if ($amount->due_amount == 0.00) {
                                        echo "<span class='label label-primary'>PAID</span>";
                                    } else {
                                        echo "<span class='label label-warning'>NOT PAID</span>";
                                    }
                                    ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th> Achat Numéro</th>
                                    <th> Article</th>
                                    <th class="hidden-xs"> Prix</th>
                                    <th class="hidden-xs"> Quantité</th>
                                    <th class="hidden-xs"> Prix UnItaire</th>
                                    <th> Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 1;
                                foreach ($history as $rows) {
                                    ?>
                                    <tr>
                                        <td><?php echo $n; ?></td>
                                        <td><?php echo $rows->purchase_no; ?></td>
                                        <td><?php echo $rows->item_name; ?></td>
                                        <td class="">$ <?php echo $rows->purchase_rate; ?></td>
                                        <td class="hidden-xs"><?php echo $rows->purchase_qty; ?></td>
                                        <td class="hidden-xs">Fcfa <?php echo $rows->purchase_rate; ?></td>
                                        <td class="hidden-xs">Fcfa <?php echo $rows->purchase_amount; ?></td>
                                    </tr>
                                    <?php $n++;
                                } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="well">
                                <address>
                                    <strong><?=$company->name;?></strong>
                                    <br/> <?=$company->address;?>
                                    <br/>
                                    <abbr title="Phone">P:</abbr> <?=$company->contact;?>
                                </address>
                                <address>
                                    <strong><?=$company->name;?></strong>
                                    <br/>
                                    <a href="mailto:#"> <?=$company->email;?> </a>
                                </address>
                            </div>
                        </div>
                        <div class="col-xs-8 invoice-block">
                            <ul class="list-unstyled amounts">
                                <li>
                                    <strong>Sous-total:</strong> Fcfa <?= $amount->grand_total ?> </li>
                                <li>
                                    <strong>Remise:</strong> <?= $amount->purchase_discount ?>%
                                </li>
                                <li>
                                    <strong>TVA:</strong> -----
                                </li>
                                <li>
                                    <strong>Somme Finale:</strong> Fcfa <?= $amount->purchase_amount_total ?> </li>
                            </ul>
                            <br/>
                            <a class="btn btn-lg btn-primary hidden-print margin-bottom-5"
                               onclick="javascript:window.print();"> Imprimer
                                <i class="fa fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



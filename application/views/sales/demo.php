<div class="col-md-12 ui-sortable">
    <!-- begin panel -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">Sélectionnez les produits à vendre</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Produit</th>
                        <th>Taille</th>
                        <th>Taux de vente</th>
                        <th>Quantité</th>
                        <th> Qté Retourné</th>
                        <th>Remise</th>
                        <th>Montant des ventes</th>
                        <th><i class="fa fa-trash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($sales_item){ $n=1; foreach ($sales_item as $rows):
                    ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $rows->sales_date; ?></td>
                        <td><?php echo $rows->item_name; ?></td>
                        <td><?php echo $rows->size; ?></td>
                        <td><?php echo $rows->sales_rate; ?></td>
                        <td><input type="number" onclick="calculate_single_entry_total(1)" onkeyup="calculate_single_entry_total(1)" id="single_entry_quantity_1" min="1" value="<?php echo $rows->sales_qty ?>" name="total_number[]"></td>
                        <td><input type="number" min="1" value="" name="return_qty[]"></td>
                        <td><input type="number" min="1" value="<?php echo $rows->sales_discount;?>" name="sales_discount[]"></td>
                        <td><input type="number" min="1" value="<?php echo $rows->sales_amount;?>" name="sales_discount[]"></td>



                    </tr>
                    <?php $n++; endforeach; }else{ echo "<div class='alert alert-success'>no record FOunds</div>";} ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end panel -->
    <div class="col-md-5"></div>
    <div class="col-md-7 ui-sortable">
        <!-- begin panel -->
        <div data-sortable-id="ui-widget-10" class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Paiement	                    </h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Montant total</td>
                            <td>
                                <input type="text" name="sub_total" value="" id="sub_total" class="form-control text-right" data-parsley-id="0979"><ul class="parsley-errors-list" id="parsley-id-0979"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Payé</td>
                            <td id="customer_discount_holder">

                            </td>
                        </tr>
                        <tr>
                            <td>Montant restant</td>
                            <td>
                                <input type="text" data-parsley-required="true" placeholder="VAT Percentage" value="10" onkeyup="calculate_grand_total()" id="vat_percentage" name="vat_percentage" class="form-control text-right" data-parsley-id="3318"><ul class="parsley-errors-list" id="parsley-id-3318"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Somme Finale</td>
                            <td>
                                <input type="text" name="amount" value="" id="grand_total" class="form-control text-right" data-parsley-id="9465"><ul class="parsley-errors-list" id="parsley-id-9465"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Paiement</td>
                            <td>
                                <input type="text" data-parsley-required="true" placeholder="Enter Payment Amount" onkeyup="return calculate_change_amount()" value="" id="payment" name="" class="form-control text-right" data-parsley-id="4305"><ul class="parsley-errors-list" id="parsley-id-4305"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Changement</td>
                            <td>
                                <input type="text" id="change_amount" value="" class="form-control text-right" data-parsley-id="4889"><ul class="parsley-errors-list" id="parsley-id-4889"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Paiement Net</td>
                            <td>
                                <input type="text" name="amount" id="net_payment" value="" class="form-control text-right" data-parsley-id="6284"><ul class="parsley-errors-list" id="parsley-id-6284"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Due</td>
                            <td>
                                <input type="text" name="due" id="due_amount" value="" class="form-control text-right" data-parsley-id="3991"><ul class="parsley-errors-list" id="parsley-id-3991"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Méthode</td>
                            <td>
                                <select name="payment_method" class="form-control" data-parsley-id="4410">
                                    <option selected="" value="">Sélectionnez le mode de paiement</option>
                                    <option value="1">Cashe</option>
                                    <option value="2">Check</option>
                                    <option value="3">Card</option>
                                </select><ul class="parsley-errors-list" id="parsley-id-4410"></ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group col-md-10">
                        <button class="btn btn-success" type="submit">Créer une nouvelle vente</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>

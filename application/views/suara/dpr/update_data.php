<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            EDIT SUARA DPR RI
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Dpr_ri/edit'); ?>
              <div class="form-group">
            <label>id suara* </label>
            <input type="number" name="id_suara" value="<?php echo $record['id_suara']?>" class="form-control" readonly>
            </div> 
            <div class="form-group">  
              <label>id tps* </label>
            <input type="number" name="id_tps" value="<?php echo $record['id_tps']?>" class="form-control" readonly>
            </div>
            <div class="form-group">
            <label>id partai* </label>
            <input type="number" name="id_partai" value="<?php echo $record['id_partai']?>" class="form-control" readonly>
            </div>
            <div class="form-group">
            <label>Suara 1* </label>
            <input type="number" name="suara1" value="<?php echo $record['caleg_1']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 2* </label>
            <input type="number" name="suara2" value="<?php echo $record['caleg_2']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 3* </label>
            <input type="number" name="suara3" value="<?php echo $record['caleg_3']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 4* </label>
            <input type="number" name="suara4" value="<?php echo $record['caleg_4']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 5* </label>
            <input type="number" name="suara5" value="<?php echo $record['caleg_5']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 6* </label>
            <input type="number" name="suara6" value="<?php echo $record['caleg_6']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 7* </label>
            <input type="number" name="suara7" value="<?php echo $record['caleg_7']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 8* </label>
            <input type="number" name="suara8" value="<?php echo $record['caleg_8']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 9* </label>
            <input type="number" name="suara9" value="<?php echo $record['caleg_9']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 10* </label>
            <input type="number" name="suara10" value="<?php echo $record['caleg_10']?>" class="form-control" required="">
            </div>
                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Dpr_ri','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->

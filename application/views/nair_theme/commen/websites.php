<section class="content">
    <section class="block">
        <div class="container"> <h1 style="padding-bottom: 20px;">Community Websites</h1>
            <div class="row">
                  <?php //var_dump($websites); ?>
                 <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Website Name</th>
                          <th scope="col">Website URL</th>
                          <th scope="col">Religion</th>
                          <th scope="col">Community</th>
                          <th scope="col">Sub Community</th>
                          <th scope="col">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($websites->result_array() as $key => $web) {   ?>

                        <tr>
                          <th scope="row"><?=$key+1?></th>
                          <td><?=$web['name']?></td>
                          <td><a href="<?=$web['url']?>" target="_blank"><?=$web['url']?></a></td>
                          <td> <?php if($web['id'] != '1'){?>
                                <select name="religion_id" id="" disabled="">
                                    <option value="" >-Select Religion-</option>
                                    <?php foreach($religion->result_array() as $key => $rel) { ?> 
                                    <option value="<?=$rel['id']?>" <?=(($rel['id'] == $web['religion_id'])?'selected':' ')?> ><?=$rel['religion_name']?></option>
                                    <?php }  ?>
                                </select>
                                <?php } else { ?>
                                     All
                                <?php }  ?>
                          </td>
                          <td>
                                <?php if($web['id'] != '1'){?>
                                <select name="religion_id" id="" disabled="">
                                    <option value="" >-Select Religion-</option>
                                    <?php foreach($community->result_array() as $key => $comm) { ?> 
                                    <option value="<?=$comm['id']?>" <?=(($comm['id'] == $web['community_id'])?'selected':' ')?> ><?=$comm['community_name']?></option>
                                    <?php }  ?>
                                </select>
                                 <?php } else { ?>
                                     All
                                <?php }  ?>
                          </td>
                          <td><?=ucfirst($web['sub_community'])?></td>
                          <td><?=$web['description']?></td>                          
                        </tr>
                         <?php } ?>
                      </tbody>
                    </table>
            </div>
        </div>
    </section>
</section>

       
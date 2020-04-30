                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th class="text-nowrap">STUD_ID</th>
                                <th class="text-nowrap">NAME</th>
                                <th class="text-nowrap">AGE</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $this->db->order_by('STUD_ID');
                            $list = $this->db->get('stud')->result_array();
                            foreach ($list as $room):
                        ?>
                            <tr>
                                <td width="1%"><?php echo $count++; ?></td>
                                <td><?php echo html_escape($room['stud_id']); ?></td>
                                <td><?php echo html_escape($room['name']); ?></td>
                                <td><?php echo html_escape($room['age']); ?></td>
                                <td>
                            </tr>
                           <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
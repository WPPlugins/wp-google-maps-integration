<!-- [Form Sub Title] - InfoWindow -->
						<?php
							//$table_name 			= $wpdb->prefix . 'twgm_infowindow';
							//$infowindows 			= $wpdb->get_results( 'SELECT id, name FROM ' . $table_name );
							$iw_representations 	= array( 'single', 'multiple' );
							$iw_set 				= $setting['infowindow'];
							$iw_representation 		= $iw_set['representation'];
							$iw_genmarker 				= "0";
							$genmarker_defaultiwhtml 	= $iw_set['genmarker_defaultiwhtml'];
							$iw_postmarker 				= "0";
							$postmarker_defaultiwhtml 	= $iw_set['postmarker_defaultiwhtml'];
						?>
						<div class="form-group form-sub-title">
							<label>Infowindow</label>
							<p>Please set the displayed infowindow style for General and Post Markers, this style support HTML format</p>
						</div>
						<div class="form-group">
							<label>Display Representation</label>
							<select class="form-control" name="setting[infowindow][representation]">
								<?php
										foreach ( $iw_representations as $iwr ) {
											$selected = ( $iw_representation === $iwr ) ? 'selected' : '';
											echo '<option value="' . $iwr . '" ' . $selected . '>' . ucfirst( $iwr ) . '</option>';
										}
									?>
							</select>
						</div>
						<div class="form-group">
							<label>General Marker</label>
							<select class="form-control iw-select" name="setting[infowindow][general_marker]" defaultiw_id="genmarker_defaultiwhtml">
								<?php
									$selected = ( $iw_genmarker === '0' ) ? 'selected' : '';
									$show = ( $selected === 'selected' ) ? 'block' : 'none';
									echo '<option value="0" '. $selected . '>Default Infowindow</option>';
									
								?>
							</select>
						</div>
						<div class="form-group" id="genmarker_defaultiwhtml" style="display:<?php echo $show ?>">
							<label>General Marker Default Infowindow HTML</label>
							<textarea class="form-control" rows="5" name="setting[infowindow][genmarker_defaultiwhtml]"><?php echo str_replace( "\\","", $genmarker_defaultiwhtml ) ?></textarea>
						</div>
						<div class="form-group">
							<label>Post Marker</label>
							<select class="form-control iw-select" name="setting[infowindow][post_marker]" defaultiw_id="postmarker_defaultiwhtml">
								<?php
									$selected = ( $iw_postmarker === '0' ) ? 'selected' : '';
									$show = ( $selected === 'selected' ) ? 'block' : 'none';
									echo '<option value="0" '. $selected . '>Default Infowindow</option>';
									
								?>			
							</select>
						</div>
						<div class="form-group" id="postmarker_defaultiwhtml" style="display:<?php echo $show ?>">
							<label>Post Marker Default Infowindow HTML</label>
							<textarea class="form-control" rows="5" name="setting[infowindow][postmarker_defaultiwhtml]"><?php echo str_replace( "\\","", $postmarker_defaultiwhtml ) ?></textarea>
						</div>
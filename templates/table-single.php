<?php gravityview_before(); ?>
<?php echo gravityview_back_link(); ?>
<table class="">
	<?php if( !empty( $this->fields['single_table-columns'] ) ): ?>
		<thead>
			<?php gravityview_header(); ?>
			<tr>
				<?php
				foreach( $this->fields['single_table-columns'] as $field ) {
					echo '<th class="'. gv_class( $field ) .'">' . esc_html( gv_label( $field ) ) . '</th>';
				}
				?>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $this->entries as $entry ) : ?>
				<tr>
					<?php foreach( $this->fields['single_table-columns'] as $field ) : ?>
						<td><?php echo gv_value( $entry, $field ); ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<?php
				foreach( $this->fields['single_table-columns'] as $field ) {
					echo '<th class="'. gv_class( $field ) .'">' . esc_html( gv_label( $field ) ) . '</th>';
				}
				?>
			</tr>
			<?php gravityview_footer(); ?>
		</tfoot>
	<?php endif; ?>
</table>
<?php gravityview_after(); ?>
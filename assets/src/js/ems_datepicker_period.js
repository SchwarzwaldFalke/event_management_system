/**
 * @author Christoph Bessei
 * @version 0.04
 */
jQuery(document).ready(function () {

	jQuery(".datepicker_period_start").datepicker({
		// Show the 'close' and 'today' buttons
		showButtonPanel: true,
		closeText      : objectL10n.closeText,
		currentText    : objectL10n.currentText,
		monthNames     : objectL10n.monthNames,
		monthNamesShort: objectL10n.monthNamesShort,
		dayNames       : objectL10n.dayNames,
		dayNamesShort  : objectL10n.dayNamesShort,
		dayNamesMin    : objectL10n.dayNamesMin,
		dateFormat     : objectL10n.dateFormat,
		firstDay       : objectL10n.firstDay,
		isRTL          : objectL10n.isRTL,
		onClose        : function (selectedDate) {
			jQuery(".datepicker_period_end").datepicker("option", "minDate", selectedDate);
		}
	});
	jQuery(".datepicker_period_end").datepicker({
		// Show the 'close' and 'today' buttons
		showButtonPanel: true,
		closeText      : objectL10n.closeText,
		currentText    : objectL10n.currentText,
		monthNames     : objectL10n.monthNames,
		monthNamesShort: objectL10n.monthNamesShort,
		dayNames       : objectL10n.dayNames,
		dayNamesShort  : objectL10n.dayNamesShort,
		dayNamesMin    : objectL10n.dayNamesMin,
		dateFormat     : objectL10n.dateFormat,
		firstDay       : objectL10n.firstDay,
		isRTL          : objectL10n.isRTL,
		onClose        : function (selectedDate) {
			jQuery(".datepicker_period_start").datepicker("option", "maxDate", selectedDate);
		}
	});
});

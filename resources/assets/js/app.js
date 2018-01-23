
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

(function ($) {
    'use strict';

    /* ---------------------------------------------
     Navigation
     --------------------------------------------- */
    function init_mainMenu() {
        var siteWrap = $('.site-wrap');

        $('#menu-btn').click(function () {
            if (siteWrap.hasClass('menu-collapsed')) {
                siteWrap.removeClass('menu-collapsed');
            } else {
                siteWrap.addClass('menu-collapsed');
            }
        });
    }

    function init_datepickers() {
        $('.input-group.date').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    }

    /* ---------------------------------------------
     Ajax
     --------------------------------------------- */
    function init_ajax(){
        var select_section = $('#select_section'),
            select_batch = $('#select_batch'),
            select_subject = $('#select_subject'),
            select_labweek = $('#select_labweek'),
            select_semester = $('#select_semester'),
            select_faculty = $('#select_faculty'),
            date = $('#date');


        if( /feedback-data\/\d+\/add/.test(window.location.href) ){

            select_semester.change(function(e){
                var semesterId = $(this).val();

                $.get( '/semesters/'+ semesterId +'/get-subjects', function(data){
                    select_subject.empty();
                    $.each(data, function() {
                        select_subject.append('<option value="' + this.id + '">' + this.name + ' (' + this.code + ') </option>');
                    });
                    select_subject.trigger('change');
                });

                $.get( '/semesters/'+ semesterId +'/get-sections', function(data){
                    select_section.empty();
                    $.each(data, function() {
                        select_section.append('<option value="' + this.id + '">' + this.name + '</option>');
                    });
                    select_section.trigger('change');
                });

            });

            select_subject.change(function(e){
                var subjectId = $(this).val(),
                    sectionId = select_section.val();

                $.get( '/sections/'+ sectionId +'/subjects/'+ subjectId +'/get-faculty', function(data){
                    select_faculty.empty();
                    $.each(data, function(k, v) {
                        select_faculty.append('<option value="' + k + '">' + v + '</option>');
                    });
                    select_faculty.trigger('change');
                });
            });

            select_section.change(function(e){
                var sectionId = $(this).val(),
                    subjectId = select_subject.val();

                $.get( '/sections/'+ sectionId +'/subjects/'+ subjectId +'/get-faculty', function(data){
                    select_faculty.empty();
                    $.each(data, function(k, v) {
                        select_faculty.append('<option value="' + k + '">' + v + '</option>');
                    });
                    select_faculty.trigger('change');
                });

            });

        } else {

            select_subject.change(function(e){
                var subjectId = $(this).val(),
                    sectionId = select_section.val();

                if( /students\/add-lab-marks/.test(window.location.href) ){
                    $.get( '/subjects/'+ subjectId +'/get-sections', function(data){
                        select_section.empty();
                        $.each(data, function() {
                            select_section.append('<option value="' + this.id + '">' + this.name + '</option>');
                        });
                        select_section.trigger('change');
                    });
                }

                $.get( '/sections/'+ sectionId +'/subjects/'+ subjectId +'/get-faculty', function(data){
                    select_faculty.empty();
                    $.each(data, function(k, v) {
                        select_faculty.append('<option value="' + k + '">' + v + '</option>');
                    });
                    select_faculty.trigger('change');
                });
            });

            select_section.change(function(e){
                var sectionId = $(this).val(),
                    subjectId = select_subject.val();

                $.get( '/sections/'+ sectionId +'/get-batches', function(data){
                    select_batch.empty();
                    $.each(data, function() {
                        select_batch.append('<option value="' + this.id + '">' + this.name + '</option>');
                    });
                });

                $.get( '/sections/'+ sectionId +'/subjects/'+ subjectId +'/get-faculty', function(data){
                    select_faculty.empty();
                    $.each(data, function(k, v) {
                        select_faculty.append('<option value="' + k + '">' + v + '</option>');
                    });
                    select_faculty.trigger('change');
                });

            });

            select_faculty.change(function(e){
                var facultyId = $(this).val();

                $.get( '/faculty/'+ facultyId +'/get-subjects', function(data){
                    select_subject.empty();
                    $.each(data, function() {
                        select_subject.append('<option value="' + this.id + '">' + this.name + ' (' + this.code + ') </option>');
                    });
                    select_subject.trigger('change');
                });
            });

            select_batch.change(function(e){
                select_labweek.trigger('change');
            });

            select_labweek.change(function(e){
                var labWeekId = $(this).val(),
                    batchId = select_batch.val(),
                    subjectId = select_subject.val();

                $.get( '/subjects/'+ subjectId +'/batches/'+ batchId +'/labweek/'+ labWeekId +'/get-date', function(data){
                    date.val( JSON.parse(data).date );
                });
            });

            $('#rollnum').change(function(e){
                $('#select_labweek2').trigger('change');
            });

            $('#select_labweek2').change(function(e){
                var rollnum = $('#rollnum').val(),
                    labWeekId = $(this).val(),
                    subjectId = select_subject.val();

                $.get( '/students/'+ rollnum +'/get-batch-id', function(data){
                    var batchId = JSON.parse(data).batch_id;

                    $.get( '/subjects/'+ subjectId +'/batches/'+ batchId +'/labweek/'+ labWeekId +'/get-date', function(data){
                        date.val( JSON.parse(data).date );
                    });
                });
            });

            select_semester.change(function(e){
                var semesterId = $(this).val();

                $.get( '/semesters/'+ semesterId +'/get-subjects', function(data){
                    select_subject.empty();
                    $.each(data, function() {
                        select_subject.append('<option value="' + this.id + '">' + this.name + ' (' + this.code + ') </option>');
                    });
                    select_subject.trigger('change');
                });

                $.get( '/semesters/'+ semesterId +'/get-sections', function(data){
                    select_section.empty();
                    $.each(data, function() {
                        select_section.append('<option value="' + this.id + '">' + this.name + '</option>');
                    });
                    select_section.trigger('change');
                });

            });
        }
    }

    function init_multiselect(){
        $('.course-selector').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            includeSelectAllOption: false,
            maxHeight: 400,
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'No option selected..';
                }
                else if (options.length > 3) {
                    return options.length + ' options selected';
                } else {
                    var labels = [];
                    options.each(function() {
                        labels.push($(this).text());
                    });
                    return labels.join(', ') + '';
                }
            }
        });

        $('.course-selector.report, .faculty-selector.report').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'No option selected..';
                }
                else if (options.length > 3) {
                    return options.length + ' options selected';
                } else {
                    var labels = [];
                    options.each(function() {
                        labels.push($(this).text());
                    });
                    return labels.join(', ') + '';
                }
            }
        });
    }

    function init_manageLabMarkTypes() {
        var labMarkTypes = $('#lab-mark-types');

        labMarkTypes.delegate('.remove-mark-type', 'click', function(e){
            e.preventDefault();
            $(this).closest('tr').remove();
        });

        $('.add-mark-type').on('click', function(e){
            e.preventDefault();

            var $trI = labMarkTypes.find('tr:last td:first').text();
            $trI = ($trI === "")? 1 : ++$trI;

            var $mtTr = $('<tr><td class="width-50">'+ $trI +'</td><td class=""><input class="form-control" name="labMarkType['
                + $trI + '][]" type="text" value=""></td><td class="width-100"><input class="form-control" name="labMarkType['
                + $trI +'][]" type="number" value=""></td><td class="width-100"><button class="btn btn-sm btn-default remove-mark-type">Remove</button></td></tr>');

            labMarkTypes.append($mtTr);
        });

    }

    function init_calenderWidget(){
        $(document).ready(function () {
            $("#dashboard-calendar").zabuto_calendar({
                language: "en",
                today: true,
            });
        });
    }

    function init_charts() {
        var feedbackCharts = $('.faculty-feedback-chart');

        feedbackCharts.each(function(){
            var feedbackId = $(this).data('feedback-id');

            new Chart(this.getContext('2d'), {
                type : 'bar',
                data: {
                    labels: chartjsFacultyDSLabels,
                    datasets: chartjsFacultyDatasets[ feedbackId ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [{
                            // barPercentage: .5,
                            // categorySpacing: .3,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max: 100
                            }
                        }],
                        yAxes: [{
                            barPercentage: .8,
                            // categorySpacing: .3,
                            ticks: {
                                beginAtZero: true,
                            }
                        }]

                    }
                }
            });
        });
    }

    function init_dataTables(){
        $('#feedback-report').DataTable({
            ordering: true
        });
    }

    function init_extras() {
        $('#student-lab-marks-entry select.attendance').change(function(e){
            if($(this).val() == 0){
                $(this).closest('tr').find('input').val(0);
            } else {
                $(this).next('input').val($(this).val());
            }
        });
    }

    /* ---------------------------------------------
     Scripts Initialization
     --------------------------------------------- */
    $(window).on( 'load', function () {

        // Hash menu forwarding
        if (window.location.hash) {
            var hash_offset = $(window.location.hash).offset().top - 60;
            $('html, body').animate({
                scrollTop: hash_offset
            }, 1000);
        }

        $(window).trigger('resize');
    });

    $(document).ready(function () {
        $(window).trigger('resize');

        // $('#sidebar .nav.navigation').scrollbar();

        init_mainMenu();
        init_datepickers();
        init_multiselect();
        init_ajax();
        init_charts();
        init_manageLabMarkTypes();
        init_calenderWidget();
        init_dataTables();
        init_extras();
    });

    $(window).resize(function () {

    });

})(jQuery);


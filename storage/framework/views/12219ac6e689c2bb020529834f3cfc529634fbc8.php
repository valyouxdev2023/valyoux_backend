<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Wallet'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.css" integrity="sha512-IGwkFtlId2R+5O765etYgj+NFf1fTfb1Kf98HiJTzqo5KaHskkErldvO7jW1pFUZZyqQLgKZmnCPNm6CwjY4rQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.min.css" integrity="sha512-kbfyniEdAn65kDvQuBaFsC6PcEZuqCv3wXD5SrSqMJvZAWy/XZhf2ByMHgHJ2h/2FJl+o/P0LBToducs2oKnTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style> 
    	#myInput{
    		border-radius: 20px!important;
    	}
    	input::placeholder {
  			font-size: 15px!important;
        	color: #A9A9A9 !important;
		}
    	.table td, .table th {
   			 padding: 0.75rem!important;
    		 vertical-align: inherit!important;
    		 border-top: 1px solid #eff2f7!important;
		}
    	table{
        	width: 100%;
    		padding: 3px 10px;
    		white-space: nowrap;
    		}
    	thead{
			text-align: center!important;    
    	}
    	tbody{
    	text-align: center!important;
    	}
   		.set_display{ 
        	display:flex!important;
        	
        	
    	}
    	.set_margin{ margin: 8px 0px 0px 7px!important;}
    	.table thead th {
    		vertical-align: baseline!important;
    		border-bottom: 2px solid #eff2f7!important;
		}
        @media (max-width: 575px) {
            .wallet div.card-body.mt-5 {
                margin-top: 2rem !important;
            }
        	
        }
        .mb-0 {
            display:none;
        }
        /* .active{
            display:block!important;
        } */
.media-body > .active {
    display: block!important;
}
    h4.wallet-close {
    float: right;
    cursor: pointer;
}
   .row.deposit {
        padding: 50px 20px;
    box-shadow: 0 1.5px 4px 0 rgba(0,0,0,.3)!important;
    }
    .container-fluid.p-0.searchresultmain:hover {
    background: #e0e0e0;
}
    
    .close-deposit{
        float: right;
    margin-left: -20px;
    margin-top: 6px;
    cursor:pointer;
    }
    
    .searchresultmain, .activesearchr{
	display: block;
    box-shadow: 0 0.5px 1px 0 rgba(0,0,0,.3)!important;
    cursor:pointer;
    float: left;
     padding-bottom: 7px !important;
}
.searimg{
float: left;


}
    
    .mains3{
        display: block;
    border: 1px solid #b4b4b4;
    float: left;
    height: 400px;
    overflow-x: unset;
    overflow-y: scroll;
    
    
    }

.searimg > img{
width:50px !important;
height:50px !important;
    margin-top: 7px;

}

.searcon{
/* 	margin-top: 10px; */
    float: left;
  
margin-top: 11px;

}
.searcon p{
margin-bottom: 0px;

}
    
    .main {
   	box-shadow: 0 0.5px 4px 0 rgba(0,0,0,.3)!important;
    display: block;
    float: left;
  
   
}
    span.cancel_main{display: block;
    float: right;
    margin-top: 10px;
    padding-right: 10px;
    font-weight:bold;
    
    }

    /* css */
    .team{text-align: left!important;}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--  -->
<html><head><meta charset="utf-8"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="mobile-web-app-capable" content="yes"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1, shrink-to-fit=no, minimal-ui"><meta property="og:url" content="https://stocks.valyoux.io"><meta property="og:type" content="article"><meta property="og:title" content="Valyouxmusic"><meta property="og:description" content="The World's First Music Artist Stock Market Powered by Blockchain Technology"><meta property="og:image" content="https://stocks.valyoux.io/public/assets/images/valyou_x_black_logo.svg"><title>Valyou X</title><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="shortcut icon" href="https://stocks.valyoux.io/public/assets/images/valyou_x_emblem.svg"><meta name="next-head-count" content="13"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""><link rel="preload" href="/_next/static/css/77df962d158fb667.css" as="style"><link rel="stylesheet" href="/_next/static/css/77df962d158fb667.css" data-n-g=""><noscript data-n-css=""></noscript><style data-n-href="/_next/static/css/05da3b31d34bf91f.css" media="x">.swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4!important;grid-row:1/4!important;grid-template-columns:min-content auto min-content;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 1px rgba(0,0,0,.075),0 1px 2px rgba(0,0,0,.075),1px 2px 4px rgba(0,0,0,.075),1px 3px 8px rgba(0,0,0,.075),2px 4px 16px rgba(0,0,0,.075);pointer-events:all}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;overflow:initial;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:.5em 0 0;padding:0 .5em}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{animation:swal2-toast-hide .1s forwards}div:where(.swal2-container){display:grid;position:fixed;z-index:1060;inset:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";grid-template-rows:minmax(min-content,auto) minmax(min-content,auto) minmax(min-content,auto);height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}div:where(.swal2-container).swal2-backdrop-show,div:where(.swal2-container).swal2-noanimation{background:rgba(0,0,0,.4)}div:where(.swal2-container).swal2-backdrop-hide{background:transparent!important}div:where(.swal2-container).swal2-bottom-start,div:where(.swal2-container).swal2-center-start,div:where(.swal2-container).swal2-top-start{grid-template-columns:minmax(0,1fr) auto auto}div:where(.swal2-container).swal2-bottom,div:where(.swal2-container).swal2-center,div:where(.swal2-container).swal2-top{grid-template-columns:auto minmax(0,1fr) auto}div:where(.swal2-container).swal2-bottom-end,div:where(.swal2-container).swal2-center-end,div:where(.swal2-container).swal2-top-end{grid-template-columns:auto auto minmax(0,1fr)}div:where(.swal2-container).swal2-top-start>.swal2-popup{align-self:start}div:where(.swal2-container).swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}div:where(.swal2-container).swal2-top-end>.swal2-popup,div:where(.swal2-container).swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}div:where(.swal2-container).swal2-center-left>.swal2-popup,div:where(.swal2-container).swal2-center-start>.swal2-popup{grid-row:2;align-self:center}div:where(.swal2-container).swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}div:where(.swal2-container).swal2-center-end>.swal2-popup,div:where(.swal2-container).swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}div:where(.swal2-container).swal2-bottom-left>.swal2-popup,div:where(.swal2-container).swal2-bottom-start>.swal2-popup{grid-column:1;grid-row:3;align-self:end}div:where(.swal2-container).swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}div:where(.swal2-container).swal2-bottom-end>.swal2-popup,div:where(.swal2-container).swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup,div:where(.swal2-container).swal2-grow-row>.swal2-popup{grid-column:1/4;width:100%}div:where(.swal2-container).swal2-grow-column>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}div:where(.swal2-container).swal2-no-transition{transition:none!important}div:where(.swal2-container) div:where(.swal2-popup){display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0,100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}div:where(.swal2-container) div:where(.swal2-popup):focus{outline:none}div:where(.swal2-container) div:where(.swal2-popup).swal2-loading{overflow-y:hidden}div:where(.swal2-container) h2:where(.swal2-title){position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}div:where(.swal2-container) div:where(.swal2-actions){display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}div:where(.swal2-container) div:where(.swal2-loader){display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-radius:100%;border-color:#2778c4 transparent;border-style:solid;border-width:.25em}div:where(.swal2-container) button:where(.swal2-styled){margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px transparent;font-weight:500}div:where(.swal2-container) button:where(.swal2-styled):not([disabled]){cursor:pointer}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus{box-shadow:0 0 0 3px hsla(208,8%,47%,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-styled):focus{outline:none}div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner{border:0}div:where(.swal2-container) div:where(.swal2-footer){justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}div:where(.swal2-container) .swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto!important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}div:where(.swal2-container) div:where(.swal2-timer-progress-bar){width:100%;height:.25em;background:rgba(0,0,0,.2)}div:where(.swal2-container) img:where(.swal2-image){max-width:100%;margin:2em auto 1em}div:where(.swal2-container) button:where(.swal2-close){z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:transparent;color:#ccc;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}div:where(.swal2-container) button:where(.swal2-close):hover{transform:none;background:transparent;color:#f27474}div:where(.swal2-container) button:where(.swal2-close):focus{outline:none;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner{border:0}div:where(.swal2-container) .swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}div:where(.swal2-container) div:where(.swal2-radio),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) label:where(.swal2-checkbox),div:where(.swal2-container) select:where(.swal2-select),div:where(.swal2-container) textarea:where(.swal2-textarea){margin:1em 2em 3px}div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) textarea:where(.swal2-textarea){box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:transparent;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px transparent;color:inherit;font-size:1.125em}div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}div:where(.swal2-container) input:where(.swal2-file):focus,div:where(.swal2-container) input:where(.swal2-input):focus,div:where(.swal2-container) textarea:where(.swal2-textarea):focus{border:1px solid #b4dbed;outline:none;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) input:where(.swal2-file)::-moz-placeholder,div:where(.swal2-container) input:where(.swal2-input)::-moz-placeholder,div:where(.swal2-container) textarea:where(.swal2-textarea)::-moz-placeholder{color:#ccc}div:where(.swal2-container) input:where(.swal2-file)::placeholder,div:where(.swal2-container) input:where(.swal2-input)::placeholder,div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder{color:#ccc}div:where(.swal2-container) .swal2-range{margin:1em 2em 3px;background:#fff}div:where(.swal2-container) .swal2-range input{width:80%}div:where(.swal2-container) .swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}div:where(.swal2-container) .swal2-range input,div:where(.swal2-container) .swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}div:where(.swal2-container) .swal2-input{height:2.625em;padding:0 .75em}div:where(.swal2-container) .swal2-file{width:75%;margin-right:auto;margin-left:auto;background:transparent;font-size:1.125em}div:where(.swal2-container) .swal2-textarea{height:6.75em;padding:.75em}div:where(.swal2-container) .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:transparent;color:inherit;font-size:1.125em}div:where(.swal2-container) .swal2-checkbox,div:where(.swal2-container) .swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}div:where(.swal2-container) .swal2-checkbox label,div:where(.swal2-container) .swal2-radio label{margin:0 .6em;font-size:1.125em}div:where(.swal2-container) .swal2-checkbox input,div:where(.swal2-container) .swal2-radio input{flex-shrink:0;margin:0 .4em}div:where(.swal2-container) label:where(.swal2-input-label){display:flex;justify-content:center;margin:1em auto 0}div:where(.swal2-container) div:where(.swal2-validation-message){align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}div:where(.swal2-container) div:where(.swal2-validation-message):before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}div:where(.swal2-container) .swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:transparent;font-weight:600}div:where(.swal2-container) .swal2-progress-steps li{display:inline-block;position:relative}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}div:where(.swal2-icon){position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border-radius:50%;border:.25em solid #000;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;user-select:none}div:where(.swal2-icon) .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}div:where(.swal2-icon).swal2-error{border-color:#f27474;color:#f27474}div:where(.swal2-icon).swal2-error .swal2-x-mark{position:relative;flex-grow:1}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-error.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark{animation:swal2-animate-error-x-mark .5s}div:where(.swal2-icon).swal2-warning{border-color:#facea8;color:#f8bb86}div:where(.swal2-icon).swal2-warning.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .5s}div:where(.swal2-icon).swal2-info{border-color:#9de0f6;color:#3fc3ee}div:where(.swal2-icon).swal2-info.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .8s}div:where(.swal2-icon).swal2-question{border-color:#c9dae1;color:#87adbd}div:where(.swal2-icon).swal2-question.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content{animation:swal2-animate-question-mark .8s}div:where(.swal2-icon).swal2-success{border-color:#a5dc86;color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}div:where(.swal2-icon).swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid hsla(98,55%,69%,.3);border-radius:50%}div:where(.swal2-icon).swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-animate-success-line-tip .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-animate-success-line-long .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right{animation:swal2-rotate-success-circular-line 4.25s ease-in}[class^=swal2]{-webkit-tap-highlight-color:rgba(0,0,0,0)}.swal2-show{animation:swal2-show .3s}.swal2-hide{animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:0;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@keyframes  swal2-toast-show{0%{transform:translateY(-.625em) rotate(2deg)}33%{transform:translateY(0) rotate(-2deg)}66%{transform:translateY(.3125em) rotate(2deg)}to{transform:translateY(0) rotate(0deg)}}@keyframes  swal2-toast-hide{to{transform:rotate(1deg);opacity:0}}@keyframes  swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}to{top:1.125em;left:.1875em;width:.75em}}@keyframes  swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}to{top:.9375em;right:.1875em;width:1.375em}}@keyframes  swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}to{transform:scale(1)}}@keyframes  swal2-hide{0%{transform:scale(1);opacity:1}to{transform:scale(.5);opacity:0}}@keyframes  swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}to{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes  swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}to{top:2.375em;right:.5em;width:2.9375em}}@keyframes  swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}to{transform:rotate(-405deg)}}@keyframes  swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}to{margin-top:0;transform:scale(1);opacity:1}}@keyframes  swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}to{transform:rotateX(0deg);opacity:1}}@keyframes  swal2-rotate-loading{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes  swal2-animate-question-mark{0%{transform:rotateY(-1turn)}to{transform:rotateY(0)}}@keyframes  swal2-animate-i-mark{0%{transform:rotate(45deg);opacity:0}25%{transform:rotate(-25deg);opacity:.4}50%{transform:rotate(15deg);opacity:.8}75%{transform:rotate(-5deg);opacity:1}to{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{background-color:transparent!important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media  print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:transparent;pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{inset:0 auto auto 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{inset:0 0 auto auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{inset:0 auto auto 0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{inset:50% auto auto 0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{inset:50% auto auto 50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{inset:50% 0 auto auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{inset:auto auto 0 0}body.swal2-toast-shown .swal2-container.swal2-bottom{inset:auto auto 0 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{inset:auto 0 0 auto}</style><script defer="" nomodule="" src="/_next/static/chunks/polyfills-5cd94c89d3acac5f.js"></script><script src="/_next/static/chunks/webpack-354e6af2e9bb2fbd.js" defer=""></script><script src="/_next/static/chunks/framework-51ca54b1c018b8c6.js" defer=""></script><script src="/_next/static/chunks/main-23a328fad554d139.js" defer=""></script><script src="/_next/static/chunks/pages/_app-e072b8589fff1177.js" defer=""></script><script src="/_next/static/chunks/2066-37dbf62a6a5ff112.js" defer=""></script><script src="/_next/static/chunks/6764-5846a69e189f8b74.js" defer=""></script><script src="/_next/static/chunks/5675-bc2439abb0d6b45a.js" defer=""></script><script src="/_next/static/chunks/9990-5b7623cb8a81aa16.js" defer=""></script><script src="/_next/static/chunks/9932-a32d72e8b0a79540.js" defer=""></script><script src="/_next/static/chunks/633-caa9bfbe43345b73.js" defer=""></script><script src="/_next/static/chunks/5152-217308e3ad59f155.js" defer=""></script><script src="/_next/static/chunks/2426-844bb4a3220c9457.js" defer=""></script><script src="/_next/static/chunks/1841-3fdc68258ef190b3.js" defer=""></script><script src="/_next/static/chunks/8292-d9f1edab2426dd74.js" defer=""></script><script src="/_next/static/chunks/pages/wallet-d58e0bd7ea385a08.js" defer=""></script><script src="/_next/static/8PASudYLgkKHEM13HHKwR/_buildManifest.js" defer=""></script><script src="/_next/static/8PASudYLgkKHEM13HHKwR/_ssgManifest.js" defer=""></script><script src="/_next/static/8PASudYLgkKHEM13HHKwR/_middlewareManifest.js" defer=""></script><style data-href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap">@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgWxM.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5vAA.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Me5g.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9vAA.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlvAA.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtvAA.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxFIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxMIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxEIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxLIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxHIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxGIzIXKMnyrYk.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxIIzIXKMny.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}</style><style>@font-face {
      font-family: 'monica-ext-font_YIBBBFG';
      src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static//fonts/Satoshi-Variable.ttf');
      font-display: swap;
    }</style><style id="_goober"> @keyframes  go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes  go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes  go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes  go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes  go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes  go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes  go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style><style type="text/css">.indiana-scroll-container {
  overflow: auto; }
  .indiana-scroll-container--dragging {
    scroll-behavior: auto !important; }
    .indiana-scroll-container--dragging > * {
      pointer-events: none;
      cursor: -webkit-grab;
      cursor: grab; }
  .indiana-scroll-container--hide-scrollbars {
    overflow: hidden;
    overflow: -moz-scrollbars-none;
    -ms-overflow-style: none;
    scrollbar-width: none; }
    .indiana-scroll-container--hide-scrollbars::-webkit-scrollbar {
      display: none !important;
      height: 0 !important;
      width: 0 !important;
      background: transparent !important;
      -webkit-appearance: none !important; }
  .indiana-scroll-container--native-scroll {
    overflow: auto; }

.indiana-dragging {
  cursor: -webkit-grab;
  cursor: grab; }
</style><style data-emotion="css" data-s=""></style><link as="script" rel="prefetch" href="/_next/static/chunks/7453-f4cde3c71122836b.js"><link as="script" rel="prefetch" href="/_next/static/chunks/2377-2cc90ecf4ef70c27.js"><link as="script" rel="prefetch" href="/_next/static/chunks/5960-ad4d501bac7bf664.js"><link as="script" rel="prefetch" href="/_next/static/chunks/1903-afe7abf3f6189d14.js"><link as="script" rel="prefetch" href="/_next/static/chunks/8685-584f6ece4ccca061.js"><link as="script" rel="prefetch" href="/_next/static/chunks/4981-d0e6d2db9ac27cdd.js"><link as="script" rel="prefetch" href="/_next/static/chunks/2543-e199f068eadc2f7d.js"><link as="script" rel="prefetch" href="/_next/static/chunks/5133-6ae3dcc32b5d17d6.js"><link as="script" rel="prefetch" href="/_next/static/chunks/3604-c8e5e77d733ae580.js"><link as="script" rel="prefetch" href="/_next/static/chunks/659-06feaf3b6f8d4b2e.js"><link as="script" rel="prefetch" href="/_next/static/chunks/828-dfbcf375177d3c7f.js"><link as="script" rel="prefetch" href="/_next/static/chunks/6653-3785bf90e29d1b40.js"><link as="script" rel="prefetch" href="/_next/static/chunks/777-2cfdcd9daf6ebbd6.js"><link as="script" rel="prefetch" href="/_next/static/chunks/1060-218a5b50a090fbd9.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/investor-875f01eaae468ec1.js"><link as="script" rel="prefetch" href="/_next/static/chunks/4078-fbd7de889e61b6c2.js"><link as="script" rel="prefetch" href="/_next/static/chunks/7419-69af1e378a18af14.js"><link as="script" rel="prefetch" href="/_next/static/chunks/7793-5a0934cd4d35c8cc.js"><link as="script" rel="prefetch" href="/_next/static/chunks/7731-d629e1827cd63ea9.js"><link as="script" rel="prefetch" href="/_next/static/chunks/6729-6dc3f7467deed809.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/exchange-7015005d9ba00302.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/send_payment-cd02400bcaf4db93.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/recieve_payment-554005702374b1b4.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/valyouX_currency-a38b889fe2045257.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/valyoux_tokens-e98bace19e57ce9d.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/transaction_info-4577199f2d98b3c9.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/artist_funds-487a3e6e749b3e69.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/business_funds-1e791679a414b939.js"><style id="mttstyle">
    .tippy-box[data-theme~="custom"] {
      font-size: 14px  !important;
      max-width: 200px  !important;
      text-align: center !important;
      backdrop-filter: blur(2px) !important;
      background-color: #000000b8 !important;
      color: #ffffffff !important;
      overflow-wrap: break-word !important;
    }
    [data-tippy-root] {
      display: inline-block !important;
      visibility: visible  !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='top'] > .tippy-arrow::before {
      border-top-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='bottom'] > .tippy-arrow::before {
      border-bottom-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='left'] > .tippy-arrow::before {
      border-left-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='right'] > .tippy-arrow::before {
      border-right-color: #000000b8 !important;
    }
    .mtt-highlight{
      background-color: #21dc6d40  !important;
      position: absolute !important;   
      z-index: 100000100 !important;
      pointer-events: none !important;
      display: inline !important;
      border-radius: 3px !important;
    }
    .ocr_text_div{
      position: absolute;
      opacity: 0.7;
      font-size: calc(100% + 1cqw);
      overflow: hidden;
      border: 2px solid CornflowerBlue;
      color: transparent !important;
      background: none !important;
    }
    </style><style>.swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4 !important;grid-row:1/4 !important;grid-template-columns:min-content auto min-content;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 1px rgba(0,0,0,.075),0 1px 2px rgba(0,0,0,.075),1px 2px 4px rgba(0,0,0,.075),1px 3px 8px rgba(0,0,0,.075),2px 4px 16px rgba(0,0,0,.075);pointer-events:all}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;overflow:initial;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:bold}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.5em;padding:0 .5em}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.8em;left:-0.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{animation:swal2-toast-hide .1s forwards}div:where(.swal2-container){display:grid;position:fixed;z-index:1060;inset:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";grid-template-rows:minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}div:where(.swal2-container).swal2-backdrop-show,div:where(.swal2-container).swal2-noanimation{background:rgba(0,0,0,.4)}div:where(.swal2-container).swal2-backdrop-hide{background:rgba(0,0,0,0) !important}div:where(.swal2-container).swal2-top-start,div:where(.swal2-container).swal2-center-start,div:where(.swal2-container).swal2-bottom-start{grid-template-columns:minmax(0, 1fr) auto auto}div:where(.swal2-container).swal2-top,div:where(.swal2-container).swal2-center,div:where(.swal2-container).swal2-bottom{grid-template-columns:auto minmax(0, 1fr) auto}div:where(.swal2-container).swal2-top-end,div:where(.swal2-container).swal2-center-end,div:where(.swal2-container).swal2-bottom-end{grid-template-columns:auto auto minmax(0, 1fr)}div:where(.swal2-container).swal2-top-start>.swal2-popup{align-self:start}div:where(.swal2-container).swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}div:where(.swal2-container).swal2-top-end>.swal2-popup,div:where(.swal2-container).swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}div:where(.swal2-container).swal2-center-start>.swal2-popup,div:where(.swal2-container).swal2-center-left>.swal2-popup{grid-row:2;align-self:center}div:where(.swal2-container).swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}div:where(.swal2-container).swal2-center-end>.swal2-popup,div:where(.swal2-container).swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}div:where(.swal2-container).swal2-bottom-start>.swal2-popup,div:where(.swal2-container).swal2-bottom-left>.swal2-popup{grid-column:1;grid-row:3;align-self:end}div:where(.swal2-container).swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}div:where(.swal2-container).swal2-bottom-end>.swal2-popup,div:where(.swal2-container).swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}div:where(.swal2-container).swal2-grow-row>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-column:1/4;width:100%}div:where(.swal2-container).swal2-grow-column>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}div:where(.swal2-container).swal2-no-transition{transition:none !important}div:where(.swal2-container) div:where(.swal2-popup){display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0, 100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}div:where(.swal2-container) div:where(.swal2-popup):focus{outline:none}div:where(.swal2-container) div:where(.swal2-popup).swal2-loading{overflow-y:hidden}div:where(.swal2-container) h2:where(.swal2-title){position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}div:where(.swal2-container) div:where(.swal2-actions){display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))}div:where(.swal2-container) div:where(.swal2-loader){display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 rgba(0,0,0,0) #2778c4 rgba(0,0,0,0)}div:where(.swal2-container) button:where(.swal2-styled){margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px rgba(0,0,0,0);font-weight:500}div:where(.swal2-container) button:where(.swal2-styled):not([disabled]){cursor:pointer}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,120,129,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-styled):focus{outline:none}div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner{border:0}div:where(.swal2-container) div:where(.swal2-footer){justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}div:where(.swal2-container) .swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto !important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}div:where(.swal2-container) div:where(.swal2-timer-progress-bar){width:100%;height:.25em;background:rgba(0,0,0,.2)}div:where(.swal2-container) img:where(.swal2-image){max-width:100%;margin:2em auto 1em}div:where(.swal2-container) button:where(.swal2-close){z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:rgba(0,0,0,0);color:#ccc;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}div:where(.swal2-container) button:where(.swal2-close):hover{transform:none;background:rgba(0,0,0,0);color:#f27474}div:where(.swal2-container) button:where(.swal2-close):focus{outline:none;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner{border:0}div:where(.swal2-container) .swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:normal;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea),div:where(.swal2-container) select:where(.swal2-select),div:where(.swal2-container) div:where(.swal2-radio),div:where(.swal2-container) label:where(.swal2-checkbox){margin:1em 2em 3px}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea){box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:rgba(0,0,0,0);box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror{border-color:#f27474 !important;box-shadow:0 0 2px #f27474 !important}div:where(.swal2-container) input:where(.swal2-input):focus,div:where(.swal2-container) input:where(.swal2-file):focus,div:where(.swal2-container) textarea:where(.swal2-textarea):focus{border:1px solid #b4dbed;outline:none;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) input:where(.swal2-input)::placeholder,div:where(.swal2-container) input:where(.swal2-file)::placeholder,div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder{color:#ccc}div:where(.swal2-container) .swal2-range{margin:1em 2em 3px;background:#fff}div:where(.swal2-container) .swal2-range input{width:80%}div:where(.swal2-container) .swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}div:where(.swal2-container) .swal2-range input,div:where(.swal2-container) .swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}div:where(.swal2-container) .swal2-input{height:2.625em;padding:0 .75em}div:where(.swal2-container) .swal2-file{width:75%;margin-right:auto;margin-left:auto;background:rgba(0,0,0,0);font-size:1.125em}div:where(.swal2-container) .swal2-textarea{height:6.75em;padding:.75em}div:where(.swal2-container) .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) .swal2-radio,div:where(.swal2-container) .swal2-checkbox{align-items:center;justify-content:center;background:#fff;color:inherit}div:where(.swal2-container) .swal2-radio label,div:where(.swal2-container) .swal2-checkbox label{margin:0 .6em;font-size:1.125em}div:where(.swal2-container) .swal2-radio input,div:where(.swal2-container) .swal2-checkbox input{flex-shrink:0;margin:0 .4em}div:where(.swal2-container) label:where(.swal2-input-label){display:flex;justify-content:center;margin:1em auto 0}div:where(.swal2-container) div:where(.swal2-validation-message){align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}div:where(.swal2-container) div:where(.swal2-validation-message)::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}div:where(.swal2-container) .swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:rgba(0,0,0,0);font-weight:600}div:where(.swal2-container) .swal2-progress-steps li{display:inline-block;position:relative}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}div:where(.swal2-icon){position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:0.25em solid rgba(0,0,0,0);border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;user-select:none}div:where(.swal2-icon) .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}div:where(.swal2-icon).swal2-error{border-color:#f27474;color:#f27474}div:where(.swal2-icon).swal2-error .swal2-x-mark{position:relative;flex-grow:1}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-error.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark{animation:swal2-animate-error-x-mark .5s}div:where(.swal2-icon).swal2-warning{border-color:#facea8;color:#f8bb86}div:where(.swal2-icon).swal2-warning.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .5s}div:where(.swal2-icon).swal2-info{border-color:#9de0f6;color:#3fc3ee}div:where(.swal2-icon).swal2-info.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .8s}div:where(.swal2-icon).swal2-question{border-color:#c9dae1;color:#87adbd}div:where(.swal2-icon).swal2-question.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content{animation:swal2-animate-question-mark .8s}div:where(.swal2-icon).swal2-success{border-color:#a5dc86;color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}div:where(.swal2-icon).swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-0.25em;left:-0.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}div:where(.swal2-icon).swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-animate-success-line-tip .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-animate-success-line-long .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right{animation:swal2-rotate-success-circular-line 4.25s ease-in}[class^=swal2]{-webkit-tap-highlight-color:rgba(0,0,0,0)}.swal2-show{animation:swal2-show .3s}.swal2-hide{animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@keyframes  swal2-toast-show{0%{transform:translateY(-0.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(0.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0deg)}}@keyframes  swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes  swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-0.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes  swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes  swal2-show{0%{transform:scale(0.7)}45%{transform:scale(1.05)}80%{transform:scale(0.95)}100%{transform:scale(1)}}@keyframes  swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(0.5);opacity:0}}@keyframes  swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-0.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes  swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes  swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes  swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(0.4);opacity:0}50%{margin-top:1.625em;transform:scale(0.4);opacity:0}80%{margin-top:-0.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes  swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0deg);opacity:1}}@keyframes  swal2-rotate-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes  swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@keyframes  swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto !important}body.swal2-no-backdrop .swal2-container{background-color:rgba(0,0,0,0) !important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media  print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll !important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static !important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:rgba(0,0,0,0);pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{inset:0 auto auto 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{inset:0 0 auto auto}body.swal2-toast-shown .swal2-container.swal2-top-start,body.swal2-toast-shown .swal2-container.swal2-top-left{inset:0 auto auto 0}body.swal2-toast-shown .swal2-container.swal2-center-start,body.swal2-toast-shown .swal2-container.swal2-center-left{inset:50% auto auto 0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{inset:50% auto auto 50%;transform:translate(-50%, -50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{inset:50% 0 auto auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-start,body.swal2-toast-shown .swal2-container.swal2-bottom-left{inset:auto auto 0 0}body.swal2-toast-shown .swal2-container.swal2-bottom{inset:auto auto 0 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{inset:auto 0 0 auto}</style><link as="script" rel="prefetch" href="/_next/static/chunks/8215-70a56d2e4604b6bd.js"><link as="script" rel="prefetch" href="/_next/static/chunks/3526-d65b26de344f2a20.js"><link as="script" rel="prefetch" href="/_next/static/chunks/4645-284a757fa2632625.js"><link as="script" rel="prefetch" href="/_next/static/chunks/7424-c78e66e5d1440cb1.js"><link as="script" rel="prefetch" href="/_next/static/chunks/pages/artist-8db87fe6cc524d37.js"><style type="text/css">.marquee-container {
  display: flex !important;
  flex-direction: row !important;
  position: relative;
  width: 100%;
}
.marquee-container:hover div {
  animation-play-state: var(--pause-on-hover);
}
.marquee-container:active div {
  animation-play-state: var(--pause-on-click);
}

.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
}
.overlay::before, .overlay::after {
  background: linear-gradient(to right, var(--gradient-color));
  content: "";
  height: 100%;
  position: absolute;
  width: var(--gradient-width);
  z-index: 2;
}
.overlay::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.overlay::before {
  left: 0;
  top: 0;
}

.marquee {
  flex: 0 0 auto;
  min-width: 100%;
  z-index: 1;
  display: flex;
  flex-direction: row;
  align-items: center;
  animation: scroll var(--duration) linear var(--delay) var(--iteration-count);
  animation-play-state: var(--play);
  animation-delay: var(--delay);
  animation-direction: var(--direction);
}
@keyframes  scroll {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}</style></head><body monica-version="4.1.1" monica-id="ofpnmcalabcbjgholdjcjblkibolbppb" style="" class=""><div id="__next"><div class="!sticky top-0 z-50"><div style="position:fixed;z-index:9999;top:16px;left:16px;right:16px;bottom:16px;pointer-events:none"></div></div><div><div class="!sticky top-2 z-10 float-right bg-white rounded-full m-4"><button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk" tabindex="0" type="button"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div><div class="bg-black p-4 h-[500px] pt-[250px]"><div class="font-[800] text-[40px] text-white">$ 760,000 VXD</div><div class="font-[700] py-2 text-white">Total Balance of Assets You Own</div><div class="font-[700] py-2 text-white">Available Balance to Cashout : $ 10,000 VXD</div><hr class="border-2 border-dashed my-4"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient !text-white lg:w-[30%] w-full flex justify-center css-ceydnk" tabindex="0" type="button">Bank / Wallet<span class="MuiTouchRipple-root css-w0pj6f"></span></button></div><div class="py-4 rounded-3xl mt-[-30px] bg-white"><div class="flex indiana-scroll-container indiana-scroll-container--hide-scrollbars"><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">DEPOSIT</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">SEND</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">RECEIVE</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">EXCHANGE</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">PERSONAL</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">ARTIST FUNDS</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">BUSINESS</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">ACCESS TOKENS</span></div></div><div class="m-2 mr-4"><div class="w-64 h-40 p-5 rounded-lg background-shadow font-bold flex items-center justify-center"><span class="text-2xl">INVESTMENTS</span></div></div></div><br><div class="cursor-grab flex indiana-scroll-container indiana-scroll-container--hide-scrollbars"><div class="m-2 mr-4"><div class="w-[376px] h-52 p-4 rounded-lg font-bold bg-black text-white shadow"><div class="flex justify-between items-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="valyoux logo" srcset="assets/valyoux_black_logo.svg?imwidth=64 1x, assets/valyoux_black_logo.svg?imwidth=128 2x" src="assets/valyoux_black_logo.svg?imwidth=128" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span><div class="flex flex-col items-end"><div>Valyou X Dollars - Platform Currency</div></div></div><div class="py-10 flex justify-center text-2xl"><span>VXD : $ 56,000</span></div></div></div><div class="m-2 mr-4"><div class="w-[376px] h-52 p-4 rounded-lg background-shadow font-bold"><div class="flex justify-between items-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="valyoux logo" srcset="assets/valyoux_black_logo.svg?imwidth=64 1x, assets/valyoux_black_logo.svg?imwidth=128 2x" src="assets/valyoux_black_logo.svg?imwidth=128" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span><div class="flex flex-col items-end"><div>Valyou X Access Tokens</div></div></div><div class="py-10 flex flex-col items-center text-2xl"><span>Value : $ 152,000</span><div class="flex items-center gap-8"><span class="text-[12px]">Tokens : 15,200</span><span class="text-[12px] text-green-500">Token Price : $ 10</span></div></div></div></div><div class="m-2 mr-4"><div class="w-[376px] h-52 p-4 rounded-lg font-bold bg-black text-white shadow"><div class="flex justify-between items-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="valyoux logo" srcset="assets/valyoux_black_logo.svg?imwidth=64 1x, assets/valyoux_black_logo.svg?imwidth=128 2x" src="assets/valyoux_black_logo.svg?imwidth=128" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span><div class="flex flex-col items-end"><div>Valyou X Investments</div></div></div><div class="py-10 flex justify-center text-2xl"><span>VXD : $ 42,000</span></div></div></div><div class="m-2 mr-4"><div class="w-[376px] h-52 p-4 rounded-lg font-bold background-shadow"><div class="flex justify-between items-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="valyoux logo" srcset="assets/valyoux_black_logo.svg?imwidth=64 1x, assets/valyoux_black_logo.svg?imwidth=128 2x" src="assets/valyoux_black_logo.svg?imwidth=128" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span><div class="flex flex-col items-end"><div>Artist Funds</div></div></div><div class="py-10 flex justify-center text-2xl"><span>VXD : $ 500,000</span></div></div></div><div class="m-2 mr-4"><div class="w-[376px] h-52 p-4 rounded-lg font-bold bg-black text-white shadow"><div class="flex justify-between items-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="valyoux logo" srcset="assets/valyoux_black_logo.svg?imwidth=64 1x, assets/valyoux_black_logo.svg?imwidth=128 2x" src="assets/valyoux_black_logo.svg?imwidth=128" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span><div class="flex flex-col items-end"><div>Business</div></div></div><div class="py-10 flex justify-center text-2xl"><span>VXD : $ 10,000</span></div></div></div></div><br></div></div></div><script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{}},"page":"/wallet","query":{},"buildId":"8PASudYLgkKHEM13HHKwR","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script><div id="monica-content-root" class="monica-widget"></div><next-route-announcer><p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">Valyou X</p></next-route-announcer><deepl-input-controller></deepl-input-controller><script src="/_next/static/chunks/7453-f4cde3c71122836b.js"></script><script src="/_next/static/chunks/5960-ad4d501bac7bf664.js"></script><script src="/_next/static/chunks/4078-fbd7de889e61b6c2.js"></script><script src="/_next/static/chunks/7793-5a0934cd4d35c8cc.js"></script><script src="/_next/static/chunks/pages/recieve_payment-554005702374b1b4.js"></script><script src="/_next/static/chunks/pages/transaction_info-4577199f2d98b3c9.js"></script><script src="/_next/static/chunks/pages/send_payment-cd02400bcaf4db93.js"></script><script src="/_next/static/chunks/pages/valyoux_tokens-e98bace19e57ce9d.js"></script><script src="/_next/static/chunks/pages/artist_funds-487a3e6e749b3e69.js"></script><script src="/_next/static/chunks/1903-afe7abf3f6189d14.js"></script><script src="/_next/static/chunks/7419-69af1e378a18af14.js"></script><script src="/_next/static/chunks/7731-d629e1827cd63ea9.js"></script><script src="/_next/static/chunks/6729-6dc3f7467deed809.js"></script><script src="/_next/static/chunks/pages/exchange-7015005d9ba00302.js"></script><script src="/_next/static/chunks/pages/valyouX_currency-a38b889fe2045257.js"></script><script src="/_next/static/chunks/2377-2cc90ecf4ef70c27.js"></script><script src="/_next/static/chunks/8685-584f6ece4ccca061.js"></script><script src="/_next/static/chunks/4981-d0e6d2db9ac27cdd.js"></script><script src="/_next/static/chunks/2543-e199f068eadc2f7d.js"></script><script src="/_next/static/chunks/5133-6ae3dcc32b5d17d6.js"></script><script src="/_next/static/chunks/3604-c8e5e77d733ae580.js"></script><script src="/_next/static/chunks/659-06feaf3b6f8d4b2e.js"></script><script src="/_next/static/chunks/828-dfbcf375177d3c7f.js"></script><script src="/_next/static/chunks/6653-3785bf90e29d1b40.js"></script><script src="/_next/static/chunks/777-2cfdcd9daf6ebbd6.js"></script><script src="/_next/static/chunks/1060-218a5b50a090fbd9.js"></script><script src="/_next/static/chunks/pages/investor-875f01eaae468ec1.js"></script><script src="/_next/static/chunks/pages/business_funds-1e791679a414b939.js"></script><script src="/_next/static/chunks/8215-70a56d2e4604b6bd.js"></script><script src="/_next/static/chunks/3526-d65b26de344f2a20.js"></script><script src="/_next/static/chunks/4645-284a757fa2632625.js"></script><script src="/_next/static/chunks/7424-c78e66e5d1440cb1.js"></script><script src="/_next/static/chunks/pages/artist-8db87fe6cc524d37.js"></script></body></html>
<!--  -->

<div class="tab-select nav nav-pills crypto-wallet" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="col-md-12">
            <div class="row">
                <?php echo check_role()=='1'? '':'<div class="col-md-2"></div>';?>
                
                <div <?php echo check_role()==1? 'class="col-md-12 nav-responsive" style="overflow-x: scroll;"':'class="col-md-8 nav-responsive"'; ?><?php echo (!empty($checkArtist))? 'class="col-md-12 nav-responsive" style="overflow-x: scroll;"':'class="col-md-8 nav-responsive'; ?>>
                <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist" bis_skin_checked="1">
                    <?php if(check_role()==1){?>
                    <a href="#reserve-currency" id="nav-reserve-currency" data-toggle="pill" role="tab"
                        aria-controls="all" class="<?php echo (check_role()==1)? 'active': '';?>" aria-selected="true">Valyou X Dollar (VXD) Reserve Currency</a>
                    <a href="#circulating-supply" id="nav-circulating-supply" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Valyou X Dollar (VXD) Circulating Supply</a>
                    <a href="#security-compliance-account" id="nav-security-compliance-account" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Security Compliance Account VXD backed by Asset</a>
                   
                    <?php }?>
                   
                    <a href="#personal-account" class="<?php echo (check_role()!=1)? 'active': '';?>" id="nav-personal-account" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Investor Personal Account</a>
                    <a href="#valyoux-access-token" id="nav-valyoux-access-token" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Valyou X Access Tokens</a>
                    <a class="unclicked investment" href="#investment" id="nav-investment" data-toggle="pill" role="tab"
                        aria-controls="nav-investment" aria-selected="false"> Investments </a>
                    <?php if(!empty($checkArtist)){?>
                    <a href="#artist-personal-account" class="unclicked" id="nav-artist-personal-account" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest1" aria-selected="false"> Artist Personal Account </a>
                    <a href="#artist" class="unclicked" id="nav-artist" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false"> Artist Company Account </a>
                    <a href="#business" class="unclicked" id="nav-business" data-toggle="pill" role="tab"
                        aria-controls="professional" aria-selected="false"> Business </a> 
                           
                    <?php } else {?>
                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" style="color:#A69C9C !important;"> Artist Company Account </a>
                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" style="color:#A69C9C !important;"> Business </a>
                    <?php }?>
                    
                    <?php  if(check_role() == 1) {?>
                        <a href="#selling_stock_revenue_amount" id="selling_stock_revenue" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Users Selling Stocks Revenue </a>
                        <a href="#buying_stock_revenue_amount" id="buying_stock_revenue" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Users Buying Stocks Revenue </a>
                        <a href="#video_streaming_revenue_amount" id="video_streaming_revenue" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Video Streaming Revenue </a>
                        <a href="#audio_streaming_revenue_amount" id="audio_streaming_revenue" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Audio Streaming Revenue </a>
                        <a href="#product_merchandise_sale_amount" id="product_merchandise_sale" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Product Merchandise Sales Revenue </a>
                        <a href="#user_buying_vxd_amount" id="user_buying_vxd" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> User Buying VXD (Fiat/Debit Card) Revenue </a>
                        <a href="#user_selling_vxd_amount1" id="user_selling_vxd1" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> User Selling VXD (Fiat/Debit Card) Revenue </a>
                        <a href="#user_buying_vxd_amount" id="user_buying_vxd" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> User Buying VXD (Crypto) Revenue </a>
                        <a href="#user_selling_vxd_amount" id="user_selling_vxd" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">  User Selling VXD ( Crypto) Revenue </a>
                        <a href="#brand_sponser_advertising_video_amount" id="brand_sponser_advertising_video" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Brand Sponsors Advertising Video Revenue </a>
                        <a href="#brand_logo_sponsoring_amount" id="brand_logo_sponsoring" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Brand Logo Sponsoring Artist revenue </a>
                        <a href="#artist_romoting_amount" id="artist_romoting" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Artist Promoting their Audio Revenue </a>
                        <a href="#artist_promoting_amount" id="artist_promoting" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Artist Promoting their Video Revenue </a>
                        <a href="#user_valyou_song_revenue_amount" id="user_valyou_song_revenue" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> User Valyou A song Revenue </a>  
                        <a href="#total_revenue_price" id="nav-total_revenue" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> Total Revenue </a>
                        <a href="#liquidity_account_price" id="nav-liquidity_account" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> Liquidity Account </a>
                    <?php }?>
                </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
                       
            <?php
                if (auth()->user()->wallet !='') {

                    $wallet = auth()->user()->wallet;
                } else {
                    
                    $wallet = '0.0';
                }
                
                if (auth()->user()->access_token !='') {
                 $access_token = auth()->user()->access_token;
                } else {

                 $access_token = '0.0';
                }
            ?>
            <?php 
                // echo "<pre>";
                // print_r(auth()->user()->wallet);die;
            ?>
    <div class="card mini-stats-wid wallet">
        <div class="card-body mt-5">
            <div class="media-body text-center" >
                <h2 id="vxd-price" class="mb-0 <?php echo (check_role()!=1)? 'active': '';?>">$ <?php echo e(numberformat($wallet)); ?> VXD</h2>
                <h2 id="artist-price" class="mb-0">$ <?php echo e(numberformat($total['artist_total'])); ?> VXD</h2>
                <h2 id="reserve-price" class="mb-0 <?php echo (check_role()==1)? 'active': '';?>">$ <?php echo e(number_format($users_reserve_amount,2)); ?> VXD</h2>
                <h2 id="circulating-supply-price" class="mb-0">$ <?php echo e(number_format($users_all_amount,2)); ?> VXD</h2>
                <h2 id="security-compliance-account-price" class="mb-0">$ 0.00 VXD</h2>
                <h2 id="valyoux-access-token-price" class="mb-0"> <?php echo e(number_format($access_token,2)); ?> Tokens</h2>
                <h2 id="investor-price" class="mb-0">$ <?php echo e(numberformat($total['investor_total'])); ?> VXD</h2>
                <h2 id="business-price" class="mb-0">$ <?php echo e(numberformat($total['business_total'])); ?> VXD</h2>
                <!--  -->
                <?php  if(auth()->user()->is_admin == 1) {?>
                <h2 id="selling_stock_revenue_amount" class="mb-0 selling_stock_revenue_amount">$ 52.00 VXD</h2>
                <h2 id="buying_stock_revenue_amount" class="mb-0 buying_stock_revenue_amount">$ 61.00 VXD</h2>
                <h2 id="video_streaming_revenue_amount" class="video_streaming_revenue_amount mb-0">$ 74.00 VXD</h2>
                <h2 id="audio_streaming_revenue_amount" class="audio_streaming_revenue mb-0">$ 86.00 VXD</h2>
                <h2 id="product_merchandise_sale_amount" class="product_merchandise_sale_amount mb-0">$ 8.00 VXD</h2>
                <h2 id="user_buying_vxd_amount" class="user_buying_vxd_amount mb-0">$ <?= number_format($admin_amount,2);?> VXD</h2>
                <h2 id="user_selling_vxd_amount" class="user_selling_vxd_amount mb-0">$ 1.00 VXD</h2>
                <h2 id="user_selling_vxd_amount1" class="user_selling_vxd_amount1 mb-0">$ 5.00 VXD</h2>
                <h2 id="brand_sponser_advertising_video_amount" class="brand_sponser_advertising_video_amount mb-0">$ 12.00 VXD</h2>
                <h2 id="brand_logo_sponsoring_amount" class="mb-0 brand_logo_sponsoring_amount">$ 13.00 VXD</h2>
                <h2 id="artist_romoting_amount" class="mb-0 artist_romoting_amount">$ 14.00 VXD</h2>
                <h2 id="artist_promoting_amount" class="mb-0 artist_promoting_amount">$ 15.00 VXD</h2>
                <h2 id="user_valyou_song_revenue_amount" class="mb-0 user_valyou_song_revenue_amount">$ 16.00 VXD</h2>
                <h2 id="total_revenue_price" class="mb-0 total_revenue_amount">$ 113.00 VXD</h2>
                <h2 id="liquidity_account_price" class="mb-0 liquidity_account_amount">$ 11.30 VXD</h2>
               </div>
                <?php }?>
                <!--  -->
                <p class="v-pink mt-2">Send this account number or QR code to receive payments</p>
                <p class="text-muted cashout_balance">This is your wallet address account number - 0x35b543362348765723487657</p>
            </div>
        </div>
    </div>
       

        <div class="investment-section">
        <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show  <?php echo (check_role()!=1)? 'active': '';?>" id="personal-account" role="tabpanel" aria-labelledby="nav-personal-account">
    <div class="wallet-button">
        <div class="bank_btns_wrap">
            <button class="btn btn-pink send_money">Send Money VXD</button>
            <button class="btn btn-green req_money">Withdraw / Sell VXD</button>
            <button class="btn btn-dark-pink exchange" onclick="stripePayment()">Deposit / Buy VXD</button>
        </div>
        <div id="payment_options" class="mt-2 mb-2 p-4 card" style="display:none;font-size: 18px;">
        <h4 class="wallet-close">X</h4>
            <h4 class="px-0 mb-3">Select Payment Type</h4>
        <div class="paymento" style="width: 320px;">
            <input class="mx-auto" type="radio" name="payment_type" value="credit_card" style="margin-right: 10px !important;"> Fiat (Creditcard)  <img class="col-2" style="width:150px; max-width:170px; float:right;" src="<?php echo e(asset('assets/images/payment_methods_logos-1.png')); ?>"> </img> <br>
            <input class="mx-auto mt-3" type="radio" name="payment_type" value="coin_deposit"  style="margin-right: 10px !important;"> Crypto <img class="col-2" style="margin-top: 10px;width: 120px;max-width: 150px;margin-right: 15px; float:right;" src="<?php echo e(asset('assets/images/valyuxusdcPayment.png')); ?>"> </img>
            
        </div>   
        </div>
        <div id="stripe_payment_div" class="mt-2 mb-2 px-3 py-4 card" style="line-height: normal;display:none;border-radius: 10px;" >
                <div class="panel-body">
<!--                     <?php if(Session::has('success')): ?>
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p><?php echo e(Session::get('success')); ?></p>
                        </div>
                    <?php endif; ?> -->
                    <form role="form" action="<?php echo e(route('admin.stripe.post')); ?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
                        <?php echo csrf_field(); ?>
                        <div class='form-row row'>
                            <div class='col-sm-12 col-md-6 form-group required'>
                                <!-- <label class='control-label'>Name on Card</label>  -->
                                <input style="line-height: 1em;height: fit-content;" class='form-control' type='text' placeholder="Name on Card">
                            </div>
                            <div class='col-xs-12 col-md-6 form-group required'>
                                <!-- <label class='control-label'>Card Number</label>  -->
                                <input style="line-height: 1em;height: fit-content;" autocomplete='off' class='form-control card-number' size='20' type='text' placeholder="Card Number">
                            </div>
                        </div>
                       
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <!-- <label class='control-label'>CVC</label>  -->
                                <input style="line-height: 1em;height: fit-content;" autocomplete='off' class='form-control card-cvc' size='4' type='text' placeholder="3-digits CVC">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <!-- <label class='control-label'>Expiration Month</label>  -->
                                <input style="line-height: 1em;height: fit-content;" class='form-control card-expiry-month' size='2' type='text' placeholder="Expiration Month - MM">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <!-- <label class='control-label'>Expiration Year</label>  -->
                                <input style="line-height: 1em;height: fit-content;" class='form-control card-expiry-year' size='4' type='text' placeholder="Expiration Year - YYYY">
                            </div>
                        </div>
                        <div id="amount_div" class='form-row row' style="display:none;">
                            <div class='col-xs-12 form-group required'>
                                <!-- <label class='control-label'>Amount</label>  -->
                                <input id="amount_field" style="line-height: 1em;height: fit-content;" autocomplete='off' name='amount' class='form-control amount' size='20' type='text' placeholder="Amount" >
                            </div>
                        </div>

                        <div class="row px-0">
                            <div id="b1" class="col-xs-12 col-md-3">
                                <button style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="submit" onclick="payOneDollar()">Deposit $1</button>
                            </div>
                            <div id="b2" class="col-xs-12 col-md-3">
                                <button style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="submit" onclick="payFiveDollar()">Deposit $5</button>
                            </div>
                            <div id="b3" class="col-xs-12 col-md-3">
                                <button style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="submit" onclick="payTenDollar()">Deposit $10</button>
                            </div>
                            <div id="custombutton" class="col-xs-12 col-md-3">
                                <button style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="button" onclick="customAmount()">Custom Amount</button>
                            </div>
                            <div id="submitbutton" class="col-xs-12 col-md-3" style="display:none;">
                                <button style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="submit" onclick="customAmount()">Pay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
			<!--select buy crypto-->
            <div id="crypto_payment_div" style="line-height: normal;display:none;border-radius: 10px;">
        	<div class="mt-2 mb-2 px-3 py-4 card">
                <div class="panel-body">
                    <form action="<?php echo e(route('admin.crypto.post')); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <div class='form-row row'>
                            <div class='col-sm-12 col-md-12 form-group'>
                                <label class='control-label'>Custom Amount</label> 
                                <input style="line-height: 1em;height: fit-content;" class='form-control customAmount' id="customAmountBuyvalidate" type='number' name="amountVXD" placeholder="How much VXD would you like to purchase?">
                            </div>
                            
                        </div>
                        <div class="row px-0">
                            <div id="paybuttonShow" class="col-xs-12 col-md-3 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="button" onclick="buttonpayVXD()">BUY VXD AMOUNT</a>
                            </div>
                            <div id="b10" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue10" type="button" onclick="payDollarVXD(10)">BUY $10 VXD</a>
                            </div>
                            <div id="b20" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue20" type="button" onclick="payDollarVXD(20)">BUY $20 VXD</a>
                            </div>
                            <div id="b30" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue30" type="button" onclick="payDollarVXD(30)">BUY $30 VXD</a>
                            </div>
                            <div id="b50" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue100" type="button" onclick="payDollarVXD(100)">BUY $100 VXD</a>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
           
       
        <!-- charges listing start -->
        <div id="list-charges" style="display: block;">
            <div class="row">
               <div class="col-lg-12">
            <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Charge Listing Transactions</h4>
                        <h5>Request Generated USDC</h5>
                   	 	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable4" class="datatable table table-hover dt-responsive nowrap display"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Charge Request Id</th>
                                            <th>Customer Id</th>
                                            <th>Customer Name</th>
                                            <th>Payment request Address</th>
                                            <th>Code</th>
                                            <th>Transaction Amount</th>
                                            <th>Currency</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Expire At</th>
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>

                                    <tbody class="getChargeListing">

                                        <?= ($listing)? $listing: "";?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
              </div>
            </div>
        </div>
        <!-- charges end listing -->
        </div> 
		<!--end select buy crypto-->

        <!--select sell crypto-->
        <div id="crypto__sell_vxd_div" class="mt-2 mb-2 p-4 card" style="display:none;font-size: 18px;">
        <h4 class="wallet-close">X</h4>
            <h4 class="px-0 mb-3">Withdraw / Sell your VXD and receive your funds in:</h4>
        <div class="paymento" style="width: 320px;">
            <input class="mx-auto" type="radio" name="payment_type" value="sell_vxd_credit_card" style="margin-right: 10px !important;"> Fiat (Creditcard)  <img class="col-2" style="width:150px; max-width:170px; float:right;" src="<?php echo e(asset('assets/images/payment_methods_logos-1.png')); ?>"> </img> <br>
            <input class="mx-auto mt-3" type="radio" name="payment_type" value="sell_vxd_crypto"  style="margin-right: 10px !important;"> Crypto <img class="col-2" style="margin-top: 10px;width: 120px;max-width: 150px;margin-right: 15px; float:right;" src="<?php echo e(asset('assets/images/valyuxusdcPayment.png')); ?>"> </img>
        </div>   
        </div>
        <div id="crypto_payment_sell" style="line-height: normal;display:none;border-radius: 10px;">
        	<div class="mt-2 mb-2 px-3 py-4 card">
                <div class="panel-body">
                    <form action="<?php echo e(route('admin.sellVxdCrypto.post')); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <div class='form-row row'>
                            <div class='col-sm-12 col-md-12 form-group'>
                                <label class='control-label'>Custom VXD Amount</label> 
                                <input style="line-height: 1em;height: fit-content;" class='form-control customAmountSellVxd' id="customAmountSellvalidate" type='number' name="amountVXD" placeholder="How much VXD would you like to Sell?">
                            </div>
                            
                        </div>
                        <div class="row px-0">
                            <div id="paybuttonShow" class="col-xs-12 col-md-3 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block" type="button" onclick="buttonSellVXD()">SELL VXD</a>
                            </div>
                            <div id="b10" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue10" type="button" onclick="sellDollarVXD(10)">SELL $10 VXD</a>
                            </div>
                            <div id="b20" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue20" type="button" onclick="sellDollarVXD(20)">SELL $20 VXD</a>
                            </div>
                            <div id="b30" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue30" type="button" onclick="sellDollarVXD(30)">SELL $30 VXD</a>
                            </div>
                            <div id="b50" class="col-xs-12 col-md-2 mt-2">
                                <a style="line-height: normal;font-size: 15px;" class="btn btn-dark btn-lg btn-block VXDvalue100" type="button" onclick="sellDollarVXD(100)">SELL $100 VXD</a>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
             <!-- checkout listing start -->
        <div style="display: block;">
            <div class="row">
               <div class="col-lg-12">
            <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Checkout Listing Transactions</h4>
                        <h5>Checkout Requests</h5>
                   	 	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable4" class="datatable table table-hover dt-responsive nowrap display"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Checkout Id</th>
                                            <th>Customer Name</th>
                                            <th>Currency</th>
                                            <th>Transaction Amount</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Resource</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                            
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="getCheckoutListing">
                                       <?= ($listing_checkout)? $listing_checkout : "";?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
              </div>
            </div>
        </div>
        <!-- checkout end listing -->
        </div> 
         <!-- checkout model code -->
         <div id="checkout_generated" class="mt-2 mb-2 px-3 py-4" style="line-height: normal;display:none;border-radius: 10px;" >
                 <!-- Modal -->
                 <div class="modal fade" id="checkoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Checkout Request Generated</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                 
                        <div>
                        <a class="buy-with-crypto" data-cache-disabled="true" id="getCheckoutRequest">Sell VXD to USDC</a>
                        <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807"></script>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="appendCancel"></div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- end modal -->
            </div>
            <!-- end checkout model code -->
		<!--end select sell crypto-->
            <!-- qr code -->
            <div id="qr_code_generated" class="mt-2 mb-2 px-3 py-4 qr_code_generated" style="line-height: normal;display:none;border-radius: 10px;" >
                <!-- Modal -->
                <div class="modal fade" id="codemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Request Generated USDC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row qr_code"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="appendCancel"></div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- end modal -->
            </div>
            <!-- qr code -->
        </div>
        <div class="row">
                <div class="col-lg-12">
                <div class="deposit_box">
            <form id="depositForm" style="display:none">
            <h3 class="close-deposit">X</h3>
            <div class="row deposit ">
            <div class="col-md-4">
            	<input id="users" autocomplete="off"   placeholder="Who would you like to send money to?" >
                <input id="user_id" name="user_id" hidden >
            	<div class="mains3 col-sm-12 p-0" style="display:none;">
            	</div>
            </div>
            <div class="col-md-3">
            <input type="number" id="wallet" name="wallet" step="any" min="0.1" placeholder="Send Amount" required>
            </div>
            <div class="col-md-4">
            <select name="note" id="" required>
            <option value="">Please select note</option>
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>"><?php echo e($value['title']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
            <div class="col-md-1">
            <button type="submit" class="deposit_btn">Send</button>
            </div>
            </div>
            </form>
        </div>
        <br>
        
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">View Transaction & Earning History</h4>
                        <h5>Income | Expenditure</h5>
                   	 	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable4" class="datatable table table-hover dt-responsive nowrap display"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Note</th>
                                            <th>Transaction Date-Time</th>
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php   $i = 1; ?>
                                    <?php if(count($transactions_data['personal']) > 0): ?>
                                    <?php $__currentLoopData = $transactions_data['personal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"> <?php echo e($row['from_name']); ?></p></div>
                                        	</td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                            </div>
                                        	</td>
                                            <td><?php echo e($row['token']); ?></td>
                                            <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                            <td><?php echo e($row['note']); ?></td>
                                            <td><?php echo e($row['created_at']); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
        </div>
    </div>
    <div class="tab-pane fade " id="artist" role="tabpanel" aria-labelledby="nav-artist">
        <div class="row">
                <div class="col-lg-12">
                <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Artist Transaction & Earning History</h4>
                        <h5>Income | Expenditure</h5>
                    	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable1" class="datatable table table-hover dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Note</th>
                                            <th>Transaction Date-Time</th>
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php   $i = 1; ?>
                                    <?php $__currentLoopData = $transactions_data['artist']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"> <?php echo e($row['from_name']); ?></p></div>
                                        	</td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                            </div>
                                        	</td>
                                            <td><?php echo e($row['token']); ?></td>
                                            <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                            <td><?php echo e($row['note']); ?></td>
                                            <td><?php echo e($row['created_at']); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
        </div>
    </div>
   
    <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="nav-investment">
        <!-- investment data -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-centered">
                        <thead>
                            <tr>
                                <th scope="col">Artist</th>
                                <th scope="col">Holdings</th>
                                <th scope="col">Current Price</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Value</th>
                                <th scope="col">Dividends</th>
                            	<th scope="col">Your Share</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                        </thead>
                        <tbody class="investor_list">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- investment data end-->
        <div class="row">
                <div class="col-lg-12">
                <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Investors View Transaction & Earning History</h4>
                        <h5>Income | Expenditure</h5>
                    	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable2" class="datatable table table-hover dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Note</th>
                                            <th>Transaction Date-Time</th>
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php   $i = 1; ?>
                             
                                    <?php $__currentLoopData = $transactions_data['investor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"> <?php echo e($row['from_name']); ?></p></div>
                                        	</td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                            </div>
                                        	</td>
                                            <td><?php echo e($row['token']); ?></td>
                                            <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                            <td><?php echo e($row['note']); ?></td>
                                            <td><?php echo e($row['created_at']); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <!-- reserve currency start -->
    <div class="tab-pane fade <?php echo (check_role()==1)? 'active' : ''?>" id="reserve-currency" role="tabpanel" aria-labelledby="nav-reserve-currency">
       
    </div>
    <!-- reserve currency end -->
    <!-- circulating supply start -->
    <div class="tab-pane fade" id="circulating-supply" role="tabpanel" aria-labelledby="nav-circulating-supply">
       
    </div>
    <!-- circulating supply end -->
    <!-- security-compliance-account start -->
    <div class="tab-pane fade" id="security-compliance-account" role="tabpanel" aria-labelledby="nav-security-compliance-account">
          
    </div>
    <!-- security-compliance-account end -->
     <!-- valyoux-access-token start -->
    <div class="tab-pane fade" id="valyoux-access-token" role="tabpanel" aria-labelledby="nav-valyoux-access-token">
    <div class="row">
                <div class="col-lg-12">
                <div class="deposit_box">
            <form id="depositFormToken">
            <div class="row deposit ">
            <div class="col-md-4">
            	<input id="users" autocomplete="off"   placeholder="Who would you like to send Valyou X access tokens to?" >
                <input type="hidden" name="user_id" class="user_id_get" value="">
            	<div class="mains3 col-sm-12 p-0" style="display:none;">
            	</div>
            </div>
            <div class="col-md-3">
            <input type="number" id="wallet" name="wallet" step="any" min="0.1" placeholder="Send Amount" required>
            </div>
            <div class="col-md-4">
            <select name="note" id="" required>
            <option value="">Please select note</option>
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>"><?php echo e($value['title']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
            <div class="col-md-1">
            <button type="submit" class="deposit_btn">Send</button>
            </div>
            </div>
            </form>
        </div>
        <br>
        <!--access tokens table transaction history  -->
        <div class="row mt-5" >
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">View Access Tokens Transaction & Earning History</h4>
                        <h5>Income | Expenditure</h5>
                   	 	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInputToken" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable4Token" class="datatable table table-hover dt-responsive nowrap display"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Current Tokens</th>
                                            <th>Access Tokens Current Value</th>
                                            <th>Access Tokens Burnt</th>
                                            <th>Access Token Remaining</th>
                                            <th>Access Tokens Required</th>
                                            <th>Note</th>
                                            <th>Transaction Date-Time</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php   $i = 1; ?>
                                    <?php if(count($AccessTokenHistory) > 0): ?>
                                    <?php $__currentLoopData = $AccessTokenHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['from_user']['avatar']) ? asset($row['from_user']['avatar']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"> <?php echo e($row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name); ?></p></div>
                                        	</td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['to_user']['avatar']) ? asset($row['to_user']['avatar']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"><?php echo e($row['to_user']['first_name'] . ' ' .  $row['to_user']->last_name); ?></p>
                                            </div>
                                        	</td>
                                            <td><?php echo e(numberformat($row['access_tokens'])); ?> Tokens</td>
                                            <td>$ <?php echo e(numberformat($row['access_tokens_current_value'])); ?> VXD</td>
                                            <td><?php echo e(numberformat($row['access_tokens_burnt'])); ?> Tokens</td>
                                            <td><?php echo e(numberformat($row['access_token_remaining'])); ?> Tokens </td>
                                            <td><?php echo e(numberformat($row['access_tokens_required'])); ?> Tokens</td>
                                            <td><?php echo e($notes[$row->desc]['title']); ?></td>
                                            <td><?php echo e($row['created_at']); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end access tokens --> 
                </div>
        </div> 
        
    </div>
       <!-- valyoux-access-token end -->
    <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="nav-business">
        <div class="row">
                <div class="col-lg-12">
                <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Business View Transaction & Earning History</h4>
                        <h5>Income | Expenditure</h5>
                    	<div class="row">
                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                        	<input type="text" id="myInput" class="form-control" autocomplete="off" placeholder="Search ..">
                    		</div>
                    	</div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table id="datatable3" class="datatable table table-hover dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Note</th>
                                            <th>Transaction Date-Time</th>
                                            <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php   $i = 1; ?>
                                    <?php $__currentLoopData = $transactions_data['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"> <?php echo e($row['from_name']); ?></p></div>
                                        	</td>
                                            <td>
                                            <div class="set_display">
                                            <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                            <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                            </div>
                                        	</td>
                                            <td><?php echo e($row['token']); ?></td>
                                            <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                            <td><?php echo e($row['note']); ?></td>
                                            <td><?php echo e($row['created_at']); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
        </div>
    </div>

        </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('assets/libs/datatables/datatables.min.js')); ?>"></script>

    <!-- crypto-wallet init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/crypto-wallet.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.js" integrity="sha512-uB84KL69yTwjmCPpaQQ1Mz1EVEjlJskbITfaRJVi8glR3xF5x9vVLI52rv1Dj7FGDW7L0UFkJ34UrdMMS6zjJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js" integrity="sha512-CwvahzdRSaKdj5SaWH7PBZmlgkvN2sz3+kDTS9yfjH+XZS/iYFsUAXVTTfeMM7uVtLabq1Hg2IC7V1RMaolcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
<?php
$wallet=number_format($wallet,4);
?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">

//user_ids\
$( document ).ready(function() {
//mouse click
$(document).on('keypress','#users',function() {
	var user_name = 'click';
	
	if(user_name!=''){
    	$.ajax({
            url: "get/users",
            type: "GET",
            //cache: false,
            data: {
                user_name: user_name,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').show();
                	$('.mains3').html(data.result);
                }
            	else{
                	$('.mains3').show();
                	$('.searchresultmain').html(data.result);
                }
            }
        });
    }
	else{
    	$('.mains3').hide();
    
    	}
	
       
    });



$(document).on('keypress','#users',function() {
	var user_name = $(this).val();
	
	if(user_name!=''){
    	$.ajax({
            url: "get/users",
            type: "GET",
            //cache: false,
            data: {
                user_name: user_name,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').show();
                	$('.mains3').html(data.result);
                }
            	else{
                	$('.mains3').show();
                	$('.searchresultmain').html(data.result);
                }
            }
        });
    }
	else{
    	$('.mains3').hide();
    
    	}
	
       
    });

//onclick search main
$(document).on('click','.searchresultmain',function(){
	var user_id = $(this).data('id');
	$('#user_id').val(user_id);
	$('.user_id_get').val(user_id);
    
	$(this).siblings().hide();
	var div=$(this);

    $('#users').hide();
	$(this).hide();
	$('.mains3').addClass('main');
	$('.main').removeClass('mains3');
	$('.main').prepend(div);
	div.removeClass('searchresultmain');
	div.addClass('activesearchr');
	$('.cancel_main').show();
	div.show();
	return -1;
});

$(document).on("click", ".cancel_main",function(){
	//$('.users_div').append('<p>hello</p>');

$(this).parent().removeClass('activesearchr');
$(this).parent().addClass('searchresultmain');
    $('.searchresultmain').show();
	$('#users').show();
$('.main').addClass('mains3');
$('.mains3').removeClass('main');

$('.cancel_main').hide();
	//$('#user_ids').removeAttr('style');
	
});

});

    $('#nav-personal-account').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#vxd-price').addClass('active');
    });
    $('#nav-artist').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#artist-price').addClass('active');
    });
    $('#nav-investment').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#investor-price').addClass('active');
    });
    $('#nav-business').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#business-price').addClass('active');
    });
    $('#nav-reserve-currency').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#reserve-price').addClass('active');
    });
    $('#nav-circulating-supply').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#circulating-supply-price').addClass('active');
    });
    $('#nav-security-compliance-account').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#security-compliance-account-price').addClass('active');
    });
    //
    $('#nav-valyoux-access-token').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('.media-body h2.active').removeClass('active');
        $('#valyoux-access-token-price').addClass('active');
        var access_tokens_amount = <?php echo e(number_format($access_token*$settings->valyoux_access_token_subscription_fee,2, '.', '')); ?>;
        const addZeroes = Number(access_tokens_amount).toFixed(Math.max(String(access_tokens_amount).split('.')[1]?.length, 2) || 2)
        var cash_out_balance = 0.10;
       
        $('.v-pink').html('Current Value $ '+addZeroes+' VXD');
        $('.cashout_balance').html('Your Available Liquidity Cash Out Balance $ '+cash_out_balance+' VXD')
    });
   
  

    let myForm = document.getElementById('depositForm')
    myForm.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(myForm);
        axios({
                method: 'post',
                url: `<?php echo e(route('admin.deposit')); ?>`,
                data: formData,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then((r) => {
                if (r.data.status === "success") {
                    window.location.reload();
                } else {
                    js_error(r.data.message)
                }
            })
            .catch(e => console.error(e));
    })
    // access token submit form 
    let myFormtoken = document.getElementById('depositFormToken');
    
    myFormtoken.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(myFormtoken);
        
        axios({
                method: 'post',
                url: `<?php echo e(route('admin.depositAccessToken')); ?>`,
                data: formData,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then((r) => {
                if (r.data.status === "success") {
                    window.location.reload();
                } else {
                    js_error(r.data.message)
                }
            })
            .catch(e => console.error(e));
    })
    // 
    $(document).ready(function () {
        // buy vdx from usdc
    	$('.send_money').click(function(){
    
    	 $('#depositForm').css('display','block');
         $('#crypto__sell_vxd_div').css('display','none');
         $('#stripe_payment_div').css('display','none');
         $('#crypto_payment_div').css('display','none');
    	 document.getElementById("payment_options").style.display = 'none';
    
    });
     $('.close-deposit').click(function(){
    
    	$('#depositForm').css('display','none');
    	
    
    });
     $('.wallet-close').click(function(){
    
    	$('#payment_options').css('display','none');
    	$('#stripe_payment_div').css('display','none');
    	$('#crypto_payment_div').css('display','none');
    	$('input[type="radio"]').prop('checked', false);
    
    });
    
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#datatable4 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    });
    $("#myInputToken").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#datatable4Token tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    });

    //sell usdc from vxd
    $('.req_money').click(function(){
        
        $('#depositForm').css('display','none');
        $('#stripe_payment_div').css('display','none');
        $('#crypto_payment_div').css('display','none');
    	document.getElementById("payment_options").style.display = 'none';
        $('#crypto__sell_vxd_div').css('display','block');
    });

    
    });
	
    function stripePayment(){
        document.getElementById("payment_options").style.display = 'block';
        document.getElementById("depositForm").style.display = 'none';
        document.getElementById("crypto__sell_vxd_div").style.display = 'none';
        document.getElementById("crypto_payment_sell").style.display = 'none';
        
    }
    function customAmount(){
        document.getElementById("amount_div").style.display = 'block';
        document.getElementById("custombutton").style.display = 'none';
        document.getElementById("b1").style.display = 'none';
        document.getElementById("b2").style.display = 'none';
        document.getElementById("b3").style.display = 'none';
        document.getElementById("crypto_payment_sell").style.display = 'none';
        document.getElementById("submitbutton").style.display = 'block';
    }
   
    
    function payOneDollar(){
        $('#amount_field').val(1);
        
    }
    function payFiveDollar(){
        $('#amount_field').val(5);
    }
    function payTenDollar(){
        $('#amount_field').val(10);
    }
    function paytwentyDollar(){
        $('#amount_field').val(20);
    }
    function paythirtyDollar(){
        $('#amount_field').val(30);
    }
    function payhundredDollar(){
        $('#amount_field').val(100);
    }
   
    $(document).ready(function(){

        $('input[type="radio"]').click(function(){
            var inputValue = $(this).attr("value");
            // for buy vxd
            if(inputValue == "credit_card"){
                document.getElementById("stripe_payment_div").style.display = 'block';
            	document.getElementById("crypto_payment_div").style.display = 'none';
            	document.getElementById("crypto_payment_sell").style.display = 'none';
            } else if(inputValue == 'coin_deposit'){
            	 document.getElementById("crypto_payment_div").style.display = 'block';
            	 document.getElementById("stripe_payment_div").style.display = 'none';
            	 document.getElementById("crypto_payment_sell").style.display = 'none';
            }
            // for sell vxd
            if(inputValue == "sell_vxd_credit_card"){
                document.getElementById("stripe_payment_div").style.display = 'none';
            	document.getElementById("crypto_payment_div").style.display = 'none';
            	document.getElementById("crypto_payment_sell").style.display = 'none';
            } else if(inputValue == 'sell_vxd_crypto'){
            	 document.getElementById("crypto_payment_div").style.display = 'none';
            	 document.getElementById("stripe_payment_div").style.display = 'none';
            	 document.getElementById("crypto_payment_sell").style.display = 'block';
            }
        });
    //
   
    });
    $(function() {
var $form = $(".require-validation");
$('form.require-validation').bind('submit', function(e) {
var $form = $(".require-validation"),
inputSelector = ['input[type=email]', 'input[type=password]',
'input[type=text]', 'input[type=file]',
'textarea'
].join(', '),
$inputs = $form.find('.required').find(inputSelector),
$errorMessage = $form.find('div.error'),
valid = true;
$errorMessage.addClass('hide');
$('.has-error').removeClass('has-error');
$inputs.each(function(i, el) {
var $input = $(el);
if ($input.val() === '') {
$input.parent().addClass('has-error');
$errorMessage.removeClass('hide');
e.preventDefault();
}
});
if (!$form.data('cc-on-file')) {
e.preventDefault();
Stripe.setPublishableKey($form.data('stripe-publishable-key'));
Stripe.createToken({
number: $('.card-number').val(),
cvc: $('.card-cvc').val(),
exp_month: $('.card-expiry-month').val(),
exp_year: $('.card-expiry-year').val()
}, stripeResponseHandler);
}
});
function stripeResponseHandler(status, response) {
if (response.error) {
$('.error')
.removeClass('hide')
.find('.alert')
.text(response.error.message);
} else {
/* token contains id, last4, and card type */
var token = response['id'];
$form.find('input[type=text]').empty();
$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
$form.get(0).submit();
}
}
});
//
function showCustomvxd(){
    document.getElementById("customAmount1").style.display = 'block';
    // document.getElementById("b10").style.display = 'none';
    // document.getElementById("b20").style.display = 'none';
    // document.getElementById("b30").style.display = 'none';
    // document.getElementById("b50").style.display = 'none';
    // document.getElementById("paybuttonShow").style.display = 'block';
    // document.getElementById("customVXDButton").style.display = 'none';
}
// for buy vxd
function buttonpayVXD(){

    var validate = true;
    var amount = $('.customAmount').val();
    if(amount == ''){
        // toastr.error('Please fill Amount field', 'Error Alert', {timeOut: 5000});
        $("#customAmountBuyvalidate").css({'border-color': '#E2230E','box-shadow':'0 0 5px #E2230E'});
        toastr.error("Amount VXD field empty.");
        validate = false;
    }  
    if(validate==true){
        if(amount){
            $.ajax({
               type:'POST',
               url:'/crypto',
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
               data:{amountVXD:amount},
               success:function(html) {
                
                var create_charges = html.create_charges;
                var listing_charges = html.listing;
                var img_qr =  `<div class=" col-xs-6 col-md-6">
                                <img style="height:200px;width:200px;margin-left: 15px;" class="qr_code" src="https://qrcode.tec-it.com/API/QRCode?data=`+create_charges.data.addresses.usdc+`&color=%000&backcolor=%23ffffff" /><br><br><br><div>Address: <input type="text" value="`+create_charges.data.addresses.usdc+`"></div></div>
                                <div class="col-xs-6 col-md-6">
                                    
                                    <h4><b>Customer Name</b></h4> 
                                    <p>`+create_charges.data.metadata.customer_name+`</p> 
                                    <h4><b>Amount</b></h4> 
                                    <p>`+create_charges.data.pricing.local.amount+`</p> 
                                    <h4><b>Currency</b></h4> 
                                    <p>`+create_charges.data.pricing.local.currency+`</p> 
                                    <h4><b>Description</b></h4> 
                                    <p>`+create_charges.data.description+`</p> 
                                </div>`;
                var cancelRequest = `<a href="javascript:void(0)" onClick="cancelCharges('`+create_charges.data.code+`')" class="btn btn-secondary">Cancel Request</a>`;
                //
                
                //
                $("#codemodal").modal('show');
                $('.appendCancel').html(cancelRequest);
                $('.qr_code').html(img_qr);
                $('.getChargeListing').html(listing_charges);
                toastr.success("Request generated! Please Scan Your Generated Unique Address.", {timeOut: 9000});
                document.getElementById("qr_code_generated").style.display = 'block';
                
                //   $("#msg").html(data.msg);
               }
            });
        } else {
            toastr.error("Empty Amount.", {timeOut: 9000});
        }
        
    }
    
}

function payDollarVXD(amount){
     $('.customAmount').val(amount);
}
// for sell vxd
function buttonSellVXD(){

var validate = true;
var amount = $('.customAmountSellVxd').val();
if(amount == ''){
    // toastr.error('Please fill Amount field', 'Error Alert', {timeOut: 5000});
    $("#customAmountSellvalidate").css({'border-color': '#E2230E','box-shadow':'0 0 5px #E2230E'});
    toastr.error("Amount Sell VXD field empty.");
    validate = false;
}  
if(validate==true){
    if(amount){
        $.ajax({
           type:'POST',
           url:'/sellVxdCrypto',
           headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           data:{amountVXDSell:amount},
           success:function(html) {

            var listing_checkout = html.listing;  
            var checkout_request = html.create_checkout;  
            $("#checkoutmodal").modal('show');
            var checkout_url = `https://commerce.coinbase.com/checkout/`+checkout_request.id+``;
            $('#getCheckoutRequest').attr('href',checkout_url);
            $('.getCheckoutListing').html(listing_checkout);
            
            toastr.success("Checkout Request Created.", {timeOut: 9000});
            document.getElementById("checkout_generated").style.display = 'block';
           }
        });
    } else {
        toastr.error("Empty Amount.", {timeOut: 9000});
    }
    
}

}

function sellDollarVXD(amount){
    $('.customAmountSellVxd').val(amount);
}
// 

 function cancelCharges(code)
 {
    if(code != ''){
        $.ajax({
               type:'POST',
               url:'/chargecancelPost',
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
               data:{code:code},
               success:function(html) {
                console.log(html);
                toastr.error("Coinbase charge request cancel successful!", {timeOut: 9000});
                $("#codemodal").modal('hide');
                location.reload(true);
               }
            });
    }
 }
//loading invesment data on bank page

            $(document).on('click', '.loadbtn2', function() {
            $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");

            loadInvestorData(pId, 2);
        });
        loadInvestorData(0, 2);
 function loadInvestorData(page, type) {
        $.ajax({
            url: 'loadinvestordata',
            type: "GET",
            cache: false,
            data: {
                offset: page,
                type: type
            },
            success: function(data) {
                
                if (data) {
                    const data1 = JSON.parse(data);
                    if (page) {
                        $(".pagination-loadmore").hide();
                        $(".investor_list").append(data1.investors_list);
                    } else {
                        $(".investor_list").html(data1.investors_list);
                    }
                   
                }
            }
        });


    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend\valyoux_backend\resources\views/bank/crypto-wallet.blade.php ENDPATH**/ ?>
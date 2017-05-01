import Base from '../longbase';

let Gallerygrid = Base.extend({
	props: {
		id: ['string', true, '']
		,isscrollable: ['boolean', true, true]
		,parentview: ['object', true, function(){ return {} }]
		,topend: ['boolean', true, true]
		,bottomend: ['boolean', true, false]
		,mousebreak: ['boolean', true, false]
		,timeto: ['array', true, function(){ return [] }]
		,iso: ['object', true, function(){ return {} }]
	},
	events: {
	},
	render: function(){
		this.cacheElements({
				gridBackground: '.Gallery__background',
				gridHead: '.Gallery__head',
				gridBody: '.Gallery__body'
		});
		this.on('change:active', this.onActiveChange, this);
		TweenMax.delayedCall(0.25, function(){
			this.iso = new Isotope( '.Gallery__mansry', {
				itemSelector: '.Gallery__item',
				percentPosition: true,
				stagger: 30,
				masonry: {
					columnWidth: '.Gallery__sizer'
				}
			});
		}, [], this);
		this.once('remove', this.cleanup, this);
		return this;

	}
})

export default Gallerygrid;

var checkboxFilter = {

	$filters: null,
	$reset: null,
	$search: null,
	groups: [],
	outputArray: [],
	outputString: '',

	init: function(){
		var self = this;
		self.$filters = $('#Filters');
		self.$reset = $('#ResetPC, #ResetSP');
		self.$search = $('.filter .c-input > input');
		self.$container = $('#Container');

		self.$filters.find('.filter').each(function(){
			self.groups.push({
				$inputs: $(this).find('input'),
				active: [],
				tracker: false
			});
		});

		self.bindHandlers();
	},
  
	bindHandlers: function(){
		var self = this;

		self.$search.on('click', function(){
			self.parseFilters();
		});

		self.$reset.on('click', function(e){
			e.preventDefault();
			self.$filters[0].reset();
			self.parseFilters();
		});
	},
  
	  parseFilters: function(){
		var self = this;
	
		for(var i = 0, group; group = self.groups[i]; i++){
			  group.active = []; // reset arrays
			  group.$inputs.each(function(){ 
				$(this).is(':checked') && group.active.push(this.value);
			  });
			group.active.length && (group.tracker = 0);
		}
	
		self.concatenate();
	  },
  
	  concatenate: function(){
		var self = this,
		cache = '',
		crawled = false,
		checkTrackers = function(){
			var done = 0;
		
			for(var i = 0, group; group = self.groups[i]; i++){
				  (group.tracker === false) && done++;
			}

			return (done < self.groups.length);
		  },
		  crawl = function(){
			for(var i = 0, group; group = self.groups[i]; i++){
				  group.active[group.tracker] && (cache += group.active[group.tracker]);

				  if(i === self.groups.length - 1){
					self.outputArray.push(cache);
					cache = '';
					updateTrackers();
				  }
			}
		  },
		updateTrackers = function(){
			for(var i = self.groups.length - 1; i > -1; i--){
				  var group = self.groups[i];

				  if(group.active[group.tracker + 1]){
					group.tracker++; 
					break;
				  } else if(i > 0){
					group.tracker && (group.tracker = 0);
				  } else {
					crawled = true;
				  }
			}
		};
	
		self.outputArray = [];
		  do{
			  crawl();
		  }
		  while(!crawled && checkTrackers());

		self.outputString = self.outputArray.join();
	
		!self.outputString.length && (self.outputString = 'all'); 
	
		  if(self.$container.mixItUp('isLoaded')){
			self.$container.mixItUp('filter', self.outputString);
		  }
	  }
};	  

$(function(){
	  checkboxFilter.init();      
	  $('#Container').mixItUp({
		controls: {
			  enable: false
		},
		animation: {
			  easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
			  duration: 600
		}
	  });

});
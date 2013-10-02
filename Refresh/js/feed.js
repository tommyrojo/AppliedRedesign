$(function(){
		ko.utils.stringStartsWith = function(string, startsWith) {
	    string = string || "";
	    if (startsWith.length > string.length) return false;
	    return string.substring(0, startsWith.length) === startsWith;
	};

	var Record = function(id, name, homeTown) {
	    this.id = id;
	    this.name = name;
	    this.homeTown = homeTown;
	};

	var ViewModel = function(records, homeTowns) {
	    var self = this;
	    self.homeTowns = ko.observableArray(homeTowns);
	    self.records = ko.observableArray(
	    ko.utils.arrayMap(records, function(i) {
	        return new Record(i.id, i.name, i.homeTown);
	    }));

	    self.idSearch = ko.observable('');
	    self.nameSearch = ko.observable('');
	    self.townSearch = ko.observable('');

	    self.filteredRecords = ko.computed(function() {
	        return ko.utils.arrayFilter(self.records(), function(r) {
	            return (self.idSearch().length == 0 || ko.utils.stringStartsWith(r.id, self.idSearch())) && (self.nameSearch().length == 0 || ko.utils.stringStartsWith(r.name.toLowerCase(), self.nameSearch().toLowerCase())) && (self.townSearch().length == 0 || r.homeTown == self.townSearch())
	        });
	    });
	};

	var homeTowns = ["Portland", "Seattle"];

	var data = [{
	    id: 1,
	    name: "Tim",
	    homeTown: "Portland"},
	{
	    id: 2,
	    name: "John",
	    homeTown: "Portland"},
	{
	    id: 3,
	    name: "Johnny",
	    homeTown: "Seattle"},
	{
	    id: 4,
	    name: "Tom",
	    homeTown: "Seattle"},
	{
	    id: 5,
	    name: "Alex",
	    homeTown: "Seattle"},
	{
	    id: 6,
	    name: "Johnathan",
	    homeTown: "Seattle"},
	{
	    id: 7,
	    name: "Tommy",
	    homeTown: "Seattle"},
	{
	    id: 8,
	    name: "Thomas",
	    homeTown: "Seattle"},
	{
	    id: 9,
	    name: "Alex",
	    homeTown: "Seattle"},
	{
	    id: 10,
	    name: "Alexander",
	    homeTown: "Seattle"},
	{
	    id: 11,
	    name: "Timothy",
	    homeTown: "Portland"},
	{
	    id: 12,
	    name: "Alex",
	    homeTown: "Portland"},
	{
	    id: 13,
	    name: "Alexander",
	    homeTown: "Portland"}, ];

	ko.applyBindings(new ViewModel(data, homeTowns));
});

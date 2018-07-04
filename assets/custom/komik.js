$(function() {
  $.ajax({
    type: "GET",
    url: "getAllkomik/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllkomik/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "update/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "idkomik",
          title: "ID Komik",
          type: "text",
          width: 50
        },
        {
          name: "namakomik",
          title: "Nama Komik",
          type: "text",
          width: 50
        },
        {
          name: "pengarang",
          title: "Pengarang",
          type: "text",
          width: 50
        },
        {
          name: "status",
          title: "Status",
          type: "text",
          width: 50
        },
         {
          name: "cover",
          title: "Alamat Cover",
          type: "text",
          width: 50
        },

        { type: "control" }
      ]
    });
  });
});

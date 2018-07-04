$(function() {
  $.ajax({
    type: "GET",
    url: "getAllchap/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "600px",
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
            url: "getAllchap/",
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
          name: "idchapter",
          title: "ID Chapter",
          type: "text",
          width: 50
        },
        {
          name: "judulchapter",
          title: "Judul Chapter",
          type: "text",
          width: 150
        },
        {
          name: "volchapter",
          title: "Volume Chapter",
          type: "text",
          width: 50
        },
        {
          name: "tanggalrilis",
          title: "Tanggal Rilis",
          type: "date",
          width: 50
        },
        {
          name: "fk_idkomik",
          title: "ID dari Komik",
          type: "text",
          width: 50
        },

        { type: "control" }
      ]
    });
  });
});

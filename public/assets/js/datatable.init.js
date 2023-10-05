/**
 * Theme: Unikit - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Datatables Js
 */
const dataTable = new simpleDatatables.DataTable("#datatable_1", {
    searchable: true,
    fixedHeight: false,
});
document.querySelector("button.sql").addEventListener("click", () => {
    dataTable_2.export({
        type: "sql",
        download: true,
        tableName: "export_table",
    });
});
document.querySelector("button.txt").addEventListener("click", () => {
    dataTable_2.export({
        type: "txt",
        download: true,
    });
});
document.querySelector("button.json").addEventListener("click", () => {
    dataTable_2.export({
        type: "json",
        download: true,
        escapeHTML: true,
        space: 3,
    });
});

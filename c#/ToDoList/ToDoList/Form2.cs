using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;



namespace ToDoList

{
    
    public partial class Form2 : Form
    {
        public TaskItem CreatedTask { get; private set; }
        public Form2()
        {
            InitializeComponent();

            comboBoxPriority.Items.AddRange(new string[]
        {
            "Low", "Medium", "High"
        });
            comboBoxPriority.SelectedIndex = 1;
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            DialogResult = DialogResult.Cancel;
            Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            CreatedTask = new TaskItem(
            0,
            textBoxTitle.Text,
            textBoxObject.Text,
            dateTimePickerTermin.Value,
            (PriorityLevel)comboBoxPriority.SelectedIndex
        );

            DialogResult = DialogResult.OK;
            Close();
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Windows.Forms;

namespace ToDoList
{
    public partial class Form1 : Form
    {
        private List<TaskItem> tasks = new List<TaskItem>();
        private int nextId = 1;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Form2 form = new Form2();

            if (form.ShowDialog() == DialogResult.OK)
            {
                TaskItem task = form.CreatedTask;
                task.IdItem = nextId++;

                tasks.Add(task);
                listBoxTasks.Items.Add(task);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if(listBoxTasks.SelectedItem != null)
            {
                listBoxTasks.Items.Remove(listBoxTasks.SelectedItem);
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            tasks = tasks.OrderBy(t => t.Termin).ToList();

            listBoxTasks.Items.Clear();
            foreach (var task in tasks)
            {
                listBoxTasks.Items.Add(task);
            }

        }
    }
}
